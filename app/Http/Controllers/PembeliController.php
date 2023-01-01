<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function buat()
    {
        return view("pembeli.form-input");
    }

    public function simpan(Request $request)
    {
        $user = new User();
        $user->name = $request->get("nama");
        $user->email = $request->get("email");
        $user->password= $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        $pembeli = new Pembeli();
        $pembeli->nama = $request->get('nama');
        $pembeli->alamat = $request->get('alamat');
        $pembeli->kelamin = $request->get('kelamin');
        $pembeli->user_id = $user->id;
        $pembeli->save();

       
    }

    public function tampil($id)
    {
        $pembeli = Pembeli::find($id);

        return view("pembeli.tampil")->with("pembeli", $pembeli);
    }

    public function semua()
    {
        $data = Pembeli::all();
        return view("pembeli.semua")->with("data", $data);
    }
}
