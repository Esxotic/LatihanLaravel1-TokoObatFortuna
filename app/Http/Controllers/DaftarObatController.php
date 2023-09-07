<?php

namespace App\Http\Controllers;

use App\Models\obat;
use App\Models\Umur;
use App\Models\JenisObat;
use Illuminate\Http\Request;

class DaftarObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Daftar-Obat.index', [
            'title' => 'Daftar Obat',
            'heading' => 'Daftar Obat',
            'active' => 'Daftar Obat',
            'obats' => obat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Daftar-Obat.create', [
            'title' => 'Form Tambah Data',
            'heading' => 'Form Tambah Data',
            'active' => 'Daftar Obat',
            'jenisObats' => JenisObat::all(),
            'umurs' => Umur::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_obat' => 'required|max:255',
            'jenis_id' => 'required',
            'umur_id' => 'required',
            'harga' => 'required|min:4',
            'stok' => 'required'
        ]);

        Obat::create($validatedData);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(obat $obat)
    {
        dd($obat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, obat $obat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(obat $obat)
    {
        //
    }
}
