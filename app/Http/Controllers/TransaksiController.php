<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('transaksi.index', [
            'title' => 'Transaksi',
            'heading' => 'Transaksi',
            'obats' => Obat::all()
        ]);
    }
    public function getObat($id)
    {
        $obat = Obat::where('id', $id)->first();
        return response()->json($obat);
    }
    public function store(Request $request)
    {
        // dd(Transaksi::all());
        $validatedData = $request->validate([
            'nama_obat' => 'required',
            'kuantiti' => 'required|numeric',
            'harga' => 'required',
            'total' => 'required'
        ]);
        // Transaksi::create($validatedData);
        $transaksi = Transaksi::where('nama_obat', $validatedData['nama_obat']);
        // dd($transaksi->exists('nama_obat'));
        if ($transaksi->exists('nama_obat')) {
            $transaksi->incrementEach([
                'kuantiti' => $validatedData['kuantiti'],
                'total' => $validatedData['total'],
            ]);
        } else {
            Transaksi::create($validatedData);
        }
        // $validatedData['kuantiti'] += $transaksi['kuantiti'];
        // $validatedData['harga'] += $transaksi['harga'];
        // $validatedData['total'] += $transaksi['total'];
    }
}
