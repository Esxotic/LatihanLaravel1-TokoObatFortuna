<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Obat;
use App\Models\Umur;
use Illuminate\Http\Request;

class DaftarObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('obat.index', [
            'title' => 'Daftar Obat',
            'heading' => 'Daftar Obat',
            'obats' => Obat::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create', [
            'title' => 'Form Obat',
            'heading' => 'Tambah Data',
            'jenis' => Jenis::all(),
            'umurs' => Umur::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vallidatedData = $request->validate([
            'nama_obat' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'jenis_id' => 'required',
            'umur_id' => 'required'
        ]);

        Obat::create($vallidatedData);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        return view('obat.edit', [
            'title' => 'Form Edit',
            'heading' => 'Form Edit',
            'obat' => $obat,
            'jenis' => Jenis::all(),
            'umurs' => Umur::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $rules = [
            'nama_obat' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'jenis_id' => 'required',
            'umur_id' => 'required'
        ];

        $vallidatedData = $request->validate($rules);
        Obat::where('id', $obat->id)->update($vallidatedData);

        return redirect(route('daftarObat.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        Obat::destroy($obat->id);
        return back();
    }
}
