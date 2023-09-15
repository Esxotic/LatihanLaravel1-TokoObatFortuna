<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Transaksi;
use Illuminate\Http\Request;

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
        $validatedData = $request->validate([
            'nama_obat' => 'required',
            'kuantiti' => 'required|numeric',
            'harga' => 'required',
            'total' => 'required',
            'stok' => 'required'
        ]);
        // dd($validatedData);

        $obat = Obat::find($validatedData['nama_obat']);
        $stok = $obat['stok'];
        $inputKuantiti = $validatedData['kuantiti'];
        $transaksi = Transaksi::where('nama_obat', $validatedData['nama_obat']);
        $validatedData['total'] = str_replace(".", "", $validatedData['total']);
        // dd($stok);

        if ($stok < 1 || $inputKuantiti > $stok) {
            return false;
        } else {
            $obat->decrement('stok', $inputKuantiti);
            if ($transaksi->exists('nama_obat')) {
                $transaksi->incrementEach([
                    'kuantiti' => $validatedData['kuantiti'],
                    'total' => $validatedData['total'],
                ]);
            } else {
                Transaksi::create($validatedData);
            }
        }
    }
}
