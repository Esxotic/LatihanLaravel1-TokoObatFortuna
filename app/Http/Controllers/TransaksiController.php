<?php

namespace App\Http\Controllers;

use App\Models\Obat;
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
}
