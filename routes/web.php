<?php
use App\Http\Controllers\KategoriPemasukanController;
use App\Http\Controllers\PemasukanKasController;
use App\Http\Controllers\PengeluaranKasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function() {
    return redirect('/');
});
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

   /* User */
   Route::get('/users', [UserController::class, 'index'])->name('users.index');
   Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
   Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
   Route::get('/users/edit/{email_user}', [UserController::class, 'edit'])->name('users.edit');
   Route::get('/users/show/{email_user}', [UserController::class, 'show'])->name('users.show');
   Route::put('/users/update/{email_user}', [UserController::class, 'update'])->name('users.update');
   Route::delete('/users/destroy/{email_user}', [UserController::class, 'destroy'])->name('users.destroy');
   
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');
Route::resource('kategori_pemasukan', KategoriPemasukanController::class);
// Menampilkan semua data kas keluar
Route::get('/pengeluaran', [PengeluaranKasController::class, 'index'])->name('pengeluaran.index');

// Menampilkan formulir untuk membuat data kas keluar baru
Route::get('/pengeluaran/create', [PengeluaranKasController::class, 'create'])->name('pengeluaran.create');

// Menyimpan data kas keluar yang baru dibuat
Route::post('/pengeluaran/store/{pengeluaran}', [PengeluaranKasController::class, 'store'])->name('pengeluaran.store');

// Menampilkan detail dari sebuah data kas keluar
Route::get('/pengeluaran/$id', [PengeluaranKasController::class, 'show'])->name('pengeluaran.show');

// Menampilkan formulir untuk mengedit data kas keluar
Route::get('/pengeluaran/$id/edit', [PengeluaranKasController::class, 'edit'])->name('pengeluaran.edit');

// Menyimpan perubahan pada data kas keluar yang sudah diedit
Route::put('/pengeluaran/$id', [PengeluaranKasController::class, 'update'])->name('pengeluaran.update');

// Menghapus data kas keluar
Route::delete('/pengeluaran/$id', [PengeluaranKasController::class, 'destroy'])->name('pengeluaran.destroy');

// Menampilkan semua data kas masuk
Route::get('/pemasukan', [PemasukanKasController::class, 'index'])->name('pemasukan.index');

// Menampilkan formulir untuk membuat data kas keluar baru
Route::get('/pemasukan/create', [PemasukanKasController::class, 'create'])->name('pemasukan.create');

// Menyimpan data kas keluar yang baru dibuat
Route::post('/pemasukan', [PemasukanKasController::class, 'store'])->name('pemasukan.store');

// Menampilkan detail dari sebuah data kas keluar
Route::get('/pemasukan/$id', [PemasukanKasController::class, 'show'])->name('pemasukan.show');

// Menampilkan formulir untuk mengedit data kas keluar
Route::get('/pemasukan/$id/edit', [PemasukanKasController::class, 'edit'])->name('pemasukan.edit');

// Menyimpan perubahan pada data kas keluar yang sudah diedit
Route::put('/pemasukan/$id', [PemasukanKasController::class, 'update'])->name('pemasukan.update');

// Menghapus data kas keluar
Route::delete('/pemasukan/$id', [PemasukanKasController::class, 'destroy'])->name('pemasukan.destroy');
 /* Log */
 Route::controller(LogController::class)->group(function () {
    Route::get('/log', 'index');

    
});