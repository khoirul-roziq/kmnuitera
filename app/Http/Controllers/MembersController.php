<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


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
            'password' => 'required|min:6',
            'nim' => 'required|size:9',
            'prodi' => 'required',
            'tahun_kader' => 'required',
            'angkatan' => 'required',
            'predikat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_asal' => 'required',
            'alamat_sekarang' => 'required',
            'email' => 'required|max:50',
            'nomor_seluler' => 'required',
            'wa' => 'required',
            'id_line' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'avatar' => 'required|max:1024'
        ]);


        $member = new Member;

        $member->nama = $request->nama;
        $member->nia = $request->nia;
        $member->password = Hash::make($request->password);
        $member->nim = $request->nim;
        $member->prodi = $request->prodi;
        $member->tahun_kader = $request->tahun_kader;
        $member->angkatan = $request->angkatan;
        $member->predikat = $request->predikat;
        $member->tempat_lahir = $request->tempat_lahir;
        $member->tanggal_lahir = $request->tanggal_lahir;
        $member->alamat_asal = $request->alamat_asal;
        $member->alamat_sekarang = $request->alamat_sekarang;
        $member->email = $request->email;
        $member->nomor_seluler = $request->nomor_seluler;
        $member->wa = $request->wa;
        $member->id_line = $request->id_line;
        $member->ig = $request->ig;
        $member->fb = $request->fb;
        $member->avatar = $request->file('avatar')->store('members/avatars');

        $query = $member->save();

        // $query = DB::table('members')
        //     ->insert([
        //         'nama' => $request->nama,
        //         'nia' => $request->nia,
        //         'password' => Hash::make($request->password),
        //         'nim' => $request->nim,
        //         'prodi' => $request->prodi,
        //         'tahun_kader' => $request->tahun_kader,
        //         'angkatan' => $request->angkatan,
        //         'predikat' => $request->predikat,
        //         'tempat_lahir' => $request->tempat_lahir,
        //         'tanggal_lahir' => $request->tanggal_lahir,
        //         'alamat_asal' => $request->alamat_asal,
        //         'alamat_sekarang' => $request->alamat_sekarang,
        //         'email' => $request->email,
        //         'nomor_seluler' => $request->nomor_seluler,
        //         'wa' => $request->wa,
        //         'id_line' => $request->id_line,
        //         'ig' => $request->ig,
        //         'fb' => $request->fb
        //     ]);

        if ($query) {
            return back()->with('success', 'Data Anggota Berhasil Ditambahkan!');
        } else {
            return back()->with('fail', 'Data Anggota Gagal Ditambahkan!');
        }


        // Member::create($request->all());
        // return redirect('/members')->with('status', 'Data Anggota Berhasil Ditambahkan!');
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
            'nama' => 'required|max:100',
            'nia' => 'required|size:9',
            // 'password' => 'required|min:6',
            'nim' => 'required|size:9',
            'prodi' => 'required',
            'tahun_kader' => 'required',
            'angkatan' => 'required',
            'predikat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_asal' => 'required',
            'alamat_sekarang' => 'required',
            'email' => 'required|max:50',
            'nomor_seluler' => 'required',
            'wa' => 'required|max:20',
            'id_line' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'avatar' => 'max:1024'
        ]);

        if($request->avatar) {
            $nameAvatar = DB::table('members')->where('id', $member->id)->first();
            Storage::delete($nameAvatar->avatar);
            Member::where('id', $member->id)->update([
                'avatar' => $request->file('avatar')->store('members/avatars')
            ]);
        }       

        Member::where('id', $member->id)->update([
            'predikat' => $request->predikat,
            'nama' => $request->nama,
            'nia' => $request->nia,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'tahun_kader' => $request->tahun_kader,
            'angkatan' => $request->angkatan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat_asal' => $request->alamat_asal,
            'alamat_sekarang' => $request->alamat_sekarang,
            'email' => $request->email,
            'nomor_seluler' => $request->nomor_seluler,
            'wa' => $request->wa,
            'id_line' => $request->id_line,
            'ig' => $request->ig,
            'fb' => $request->fb
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

    function login()
    {
        return view('/members/login');
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ]);

        // $member = Member::where('email', '=', $request->email)->first();
        $member = DB::table('members')
            ->where('email', $request->email)
            ->first();

        if ($member) {
            if (Hash::check($request->password, $member->password)) {
                $request->session()->put('LoggedMember', $member->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password Salah');
            }
        } else {
            return back()->with('fail', 'Tidak ada akun yang cocok dengan email ini');
        }
    }

    public function dashboard()
    {
        if (session()->has('LoggedMember')) {
            // $member = Member::where('id', '=', session('LoggedMember'))->first();
            $member = DB::table('members')
                ->where('id', session('LoggedMember'))
                ->first();
            $data = [
                'LoggedMemberInfo' => $member
            ];
        }
        return view('members.dashboard', $data);
    }

    function logout()
    {
        if (session()->has('LoggedMember')) {
            session()->pull('LoggedMember');
            return redirect('login');
        }
    }
}
