<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Transaksi;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade as PDF;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index', [
            'title' => 'Laporan',
            'heading' => 'Laporan'
        ]);
    }
    public function cetak()
    {
        $transaksi = Transaksi::all();

        $pdf = PDF::loadview('laporan.laporan_pdf', [
            'transaksis' => $transaksi,
        ]);
        // $html = '<link rel="stylesheet" href="/css/bootstrap.min.css">';
        // $pdf->loadHTML($html);
        $pdf->setOption([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
        ]);
        return $pdf->stream('Laporan Penjualan');

        // $pdf = PDF::loadview('laporan.laporan_pdf', [
        //     'transaksis' => $transaksi,
        // ]);
        // PDF::setOption(['dpi' => 150, 'debugCss' => true, 'defaultFont' => 'sans-serif']);
        // return $pdf->stream();
        // return $pdf->download('laporan-penjualan-pdf');
    }
}
