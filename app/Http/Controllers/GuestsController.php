<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guests.formreg', ['titlePage' => 'Form Pendaftaran Anggota']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'nim' => 'required|size:9',
            'prodi' => 'required|max:50',
            'angkatan' => 'required|size:4',
            'email' => 'required|max:50|email:rfc,dns',
            'wa' => 'required|max:20'
        ]);

        Guest::create($request->all());
        return redirect('/formreg')->with('status', 'Anda Berhasil Melakukan Registrasi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        return view('guests.show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        return view('guests.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'nim' => 'required|size:9',
            'prodi' => 'required|max:50',
            'angkatan' => 'required|size:4',
            'email' => 'required|max:50|email:rfc,dns',
            'wa' => 'required|max:20'
        ]);

        Guest::where('id', $guest->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'email' => $request->email,
            'wa' => $request->wa,

        ]);
        return redirect('/guests')->with('status', 'Data Pendaftar Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        Guest::destroy($guest->id);
        return redirect('/guests')->with('status', 'Data Pendaftar Berhasil Dihapus!');
    }
}
