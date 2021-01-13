<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
            'nama' => 'required',
            'nia' => 'required|size:9',
            'nim' => 'required|size:9',
            'prodi' => 'required',
            'angkatan' => 'required',
            'predikat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_asal' => 'required',
            'alamat_sekarang' => 'required',
            'email' => 'required',
            'nomor_seluler' => 'required',
            'wa' => 'required',
            'id_line' => 'required',
            'ig' => 'required',
            'fb' => 'required'
        ]);

        Member::create($request->all());
        return redirect('/members')->with('status', 'Data Anggota Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nama' => 'required',
            'nia' => 'required|size:9',
            'nim' => 'required|size:9'
        ]);

        Member::where('id', $member->id)->update([
            'predikat' => $request->predikat,
            'nama' => $request->nama,
            'nia' => $request->nia,
            'nim' => $request->nim,
            'prodi' => $request->prodi
        ]);

        return redirect('/members')->with('status', 'Data Anggota Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        Member::destroy($member->id);
        return redirect('/members')->with('status', 'Data Anggota Berhasil Dihapus!');
    }
}
