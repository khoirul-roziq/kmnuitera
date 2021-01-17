<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
            'nim' => 'required|size:9|unique:guests',
            'prodi' => 'required|max:50',
            'angkatan' => 'required|size:4',
            'email' => 'required|max:50|email:rfc,dns',
            'wa' => 'required|max:20',
            'avatar' => 'required|max:1024'
        ]);

        $guest = new Guest;

        $guest->nama = $request->nama;
        $guest->nim = $request->nim;
        $guest->prodi = $request->prodi;
        $guest->angkatan = $request->angkatan;
        $guest->email = $request->email;
        $guest->wa = $request->nama;
        $guest->avatar = $request->file('avatar')->store('guests/avatars');

        $query = $guest->save();

        // dd($cek);
        // Guest::create($request->all());
        // return redirect('/formreg')->with('status', 'Anda Berhasil Melakukan Registrasi!');
        if ($query) {
            return back()->with('success', 'Anda Berhasil Melakukan Registrasi!');
        } else {
            return back()->with('fail', 'Registrasi Yang Anda Lakukan Gagal!');
        }
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
            'wa' => 'required|max:20',
            'avatar' => 'max:1024'
        ]);
        
        if($request->avatar) {
            $nameAvatar = DB::table('guests')->where('id', $guest->id)->first();
            Storage::delete($nameAvatar->avatar);
            Guest::where('id', $guest->id)->update([
                'avatar' => $request->file('avatar')->store('guests/avatars')
            ]);
        }        
        Guest::where('id', $guest->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'email' => $request->email,
            'wa' => $request->wa
        ]);
        // if(!$request->file('avatar') ) {
        //     $guest->avatar => $request->file('avatar')->store('images/avatars');
        // }
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
