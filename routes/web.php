<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PembeliController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hallo/{nama}",[TestingController::class,"hallo"] )->name("halaman1");


Route::get("/Nama", [TestingController::class,"nama"])->name("halaman2");

Route::get("/Alamat", function() {
    return view("Alamat");
})->name("halaman3");

Route::get("/Usia", function() {
    return view("Usia");
})->name("halaman3");

Route::get('/Biodata', function () {
    return view("Biodata");
})->name("halaman4");

Route::get('/kampus/{nama}', function ($nama) {
    return view("kampus")
        ->with("kampus",$nama)
        ->with("kelas","ruangan");
})->name("halaman5");


Route::get("/tampil-semua-user", [UserController::class, "tampil"])->name("user_all"); // URL Tampil Semua User
Route::get("/input-user", [UserController::class, "formInput"])->name("user_input");   // URL Form Input
Route::post("/simpan-user", [UserController::class, "simpan"])->name("user_simpan");   // URL Simpan User

Route::get("/edit-user/{id}", [UserController::class, "formEdit"])->name("user_edit"); // URL Form Edit
Route::put("/update-user/{id}", [UserController::class, "update"])->name("user_update"); // URL Form Edit


Route::delete("/hapus-user/{id}", [UserController::class, "hapus"])->name("user_hapus"); // URL Form hapus
Route::get("/tampil-user/{id}", [UserController::class, "show"])->name("user_show"); // URL Form hapus

Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");


Route::middleware("auth")->group(function() {
    Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
    Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

    Route::get("pembeli/buat", [PembeliController::class, 'buat'])->name("buat_pembeli");
    Route::post("pembeli/simpan", [PembeliController::class, 'simpan'])->name("simpan_pembeli");
    Route::get("pembeli/tampil/{id}", [PembeliController::class, 'tampil'])->name("tampil_pembeli");
    Route::get("pembeli/semua", [PembeliController::class, 'semua'])->name("semua_pembeli");
    Route::get("pembeli/ubah/{id}", [PembeliController::class, 'ubah'])->name("ubah_pembeli");
    Route::put("pembeli/update/{id}", [PembeliController::class, 'update'])->name("update_pembeli");
    Route::delete("pembeli/hapus/{id}", [PembeliController::class, 'hapus'])->name("hapus_pembeli");

    Route::get("obat/buat", [ObatController::class, "formInput"])->name("buat_obat");
    Route::post("obat/simpan", [ObatController::class, "simpan"])->name("simpan_obat");
    Route::get("obat/tampil/{id}", [ObatController::class, "tampil"])->name("tampil_obat");

});