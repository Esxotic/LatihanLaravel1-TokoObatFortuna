<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Transaksi;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $this->authorize('pemilik');
        return view('laporan.index', [
            'title' => 'Laporan',
            'heading' => 'Laporan'
        ]);
    }
    public function cetak()
    {
        $this->authorize('pemilik');

        $transaksi = Transaksi::all();

        $pdf = PDF::loadview('laporan.laporan_pdf', [
            'transaksis' => $transaksi,
        ]);

        $pdf->setOption([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
        ]);
        return $pdf->stream('Laporan Penjualan');
    }
}
