<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pasien = Pasien::all();
        return view('admin.pasien.index', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|in:L, P',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'kelurahan_nama' => 'required|string',
        ]);

        Pasien::create($validated);
        return redirect('/dashboard/pasien');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        // Mendapatkan data berdasarkan Id
        // $list_pasien = Pasien::find($id);
        return view('admin.pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
    }
}
