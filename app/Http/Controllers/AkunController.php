<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('pemilik');
        return view('akun.index', [
            'title' => 'Daftar Obat',
            'heading' => 'Daftar Obat',
            'users' => User::latest()->paginate(4)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $this->authorize('pemilik');
        return view('akun.edit', [
            'user' => $user,
            'title' => 'Akun',
            'heading' => 'Form Akun',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('pemilik');

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required'
        ];

        $vallidatedData = $request->validate($rules);
        User::where('id', $user->id)->update($vallidatedData);

        return redirect(route('akun.index'))->with('success', 'Akun berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->authorize('pemilik');

        User::destroy($user->id);

        return back()->with('success', 'Data berhasil dihapus');
    }
}
