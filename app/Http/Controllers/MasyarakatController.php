<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = DB::table('tb_masyarakat')->get();
        return view('v_masyarakat', [
            'title' => 'Masyarakat',
            'masyarakat' => $masyarakat
        ]);
    }

    public function store(Request $request)
    {
        DB::table('tb_masyarakat')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp
        ]);
        return redirect('/')->with('success', 'Data Berhasil Ditambahkan!');
    }
}
