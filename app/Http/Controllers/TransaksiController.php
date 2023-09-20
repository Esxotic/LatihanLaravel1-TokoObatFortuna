<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $this->authorize('kasir');
        return view('transaksi.index', [
            'title' => 'Transaksi',
            'heading' => 'Transaksi',
            'obats' => Obat::all()
        ]);
    }
    public function getObat($id)
    {
        $this->authorize('kasir');

        $obat = Obat::where('id', $id)->first();
        return response()->json($obat);
    }
    public function store(Request $request)
    {
        $this->authorize('kasir');

        $validatedData = $request->validate([
            'obat_id' => 'required',
            'kuantiti' => 'required|numeric',
            'harga' => 'required',
            'total' => 'required',
            'stok' => 'required'
        ]);
        // dd($validatedData);

        $obat = Obat::find($validatedData['obat_id']);
        $stok = $obat['stok'];
        $inputKuantiti = $validatedData['kuantiti'];
        $transaksi = Transaksi::where('obat_id', $validatedData['obat_id']);
        $validatedData['total'] = str_replace(".", "", $validatedData['total']);
        // dd($stok);

        if ($stok < 1 || $inputKuantiti > $stok) {
            return false;
        } else {
            $obat->decrement('stok', $inputKuantiti);
            if ($transaksi->exists('obat_id')) {
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
