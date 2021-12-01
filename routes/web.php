<?php
use App\Http\Controllers\HomeAdmin;
use App\Http\Controllers\DataBukuAdmin;
use App\Http\Controllers\AboutAdmin;
use App\Http\Controllers\MemberAdmin;
use App\Http\Controllers\PeminjamanAdmin;
use App\Http\Controllers\KategoriAdmin;
use App\Http\Controllers\KontakAdmin;
use Illuminate\Support\Facades\Route;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// home admin
Route::get('/homeadmin', [HomeAdmin::class, 'index']);
// halaman buku admin
Route::get('/dataBuku', [DataBukuAdmin::class, 'index']);
// halaman about admin
Route::get('/aboutAdmin', [AboutAdmin::class, 'index']);
// halaman member admin
Route::get('/memberAdmin', [MemberAdmin::class, 'index']);
// halaman peminjaman admin
Route::get('/peminjamanAdmin', [PeminjamanAdmin::class, 'index']);
// halaman kontak admin
Route::get('/kontakAdmin', [KontakAdmin::class, 'index']);
// halaman kategori admin
Route::get('/kategoriAdmin', [KategoriAdmin::class, 'index']);
// halaman tambah kat admin
Route::get('/tambahKatAdmin', [KategoriAdmin::class, 'create']);
