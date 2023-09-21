<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Obat;
use App\Models\Umur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('obat.index', [
            'title' => 'Daftar Obat',
            'heading' => 'Daftar Obat',
            'obats' => Obat::paginate(4)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin');
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
        $this->authorize('admin');

        $vallidatedData = $request->validate([
            'nama_obat' => 'required|unique:obats',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'jenis_id' => 'required',
            'umur_id' => 'required'
        ]);

        Obat::create($vallidatedData);

        return back()->with('success', 'Data berhasil disimpan!');
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
        $this->authorize('admin');

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
        $this->authorize('admin');

        $rules = [
            'nama_obat' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'jenis_id' => 'required',
            'umur_id' => 'required'
        ];

        $vallidatedData = $request->validate($rules);
        Obat::where('id', $obat->id)->update($vallidatedData);

        return redirect(route('daftarObat.index'))->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        $this->authorize('admin');

        Obat::destroy($obat->id);
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
