<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function formInput()
    {
        $kategori = Kategori::all();
        return view("obat.form-input")->with("kategori", $kategori);
    }

    public function simpan(Request $request)
    {
        $obat= new Obat();
        $obat->nama = $request->get("nama");
        $obat->gambar = $request->get("gambar");
        $obat->Keterangan = $request->get("keterangan");
        $obat->pembeli_id = auth()->user()->pembeli->id;
        $obat->save();

        $obat->kategori()->sync($request->get("kategori")); // simpan relasi many to many

        return redirect(route("tampil_obat", ['id' => $obat->id]));
    }

    public function tampil($id)
    {
        $berita = Obat::find($id);
        return view("obat.tampil", ['obat' => $obat]);
    }

    public function formEdit($id)
    {
        $kategori = Kategori::all();
        return view("obat.form-edit")->with("kategori", $kategori)->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $berita = new Berita();
        $obat->judul = $request->get("judul");
        $obat->gambar = $request->get("gambar");
        $obat->keterangan = $request->get("keterangan");
        $obat->pembeli_id = auth()->user()->pembeli->id;
        $obat->save();


        $berita->kategori()->sync($request->get("kategori")); // simpan relasi many to many

        return redirect(route("tampil_obat", ['id' => $obat->id]));
    }
}