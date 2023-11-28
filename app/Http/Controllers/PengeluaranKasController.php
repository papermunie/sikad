<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengeluaranKas; 
class PengeluaranKasController extends Controller
{
    // Menampilkan semua data kas keluar
    public function index()
    {
        $PengeluaranKass = PengeluaranKas::all();
        return view('dashboard.pengeluaran.index', compact('PengeluaranKass'));
    }

    // Menampilkan formulir untuk membuat data kas keluar baru
    public function create(Request $request, PengeluaranKas $pengeluaran)
    { return view('dashboard.pengeluaran.create');
          $user = 'risma@gmail.com';
        // Validasi request jika diperlukan
            $validatedData = $request->validate([
                'kode_pengeluaran' => 'required',
                'jenis_pengeluaran' => 'required',
                'tanggal_pengeluaran' => 'required',
                'jumlah_pengeluaran' => 'required',
                'dokumentasi' => 'required',
            ]);

        // Simpan data ke dalam database
        $pengeluaran->kode_pengeluaran = $request->input('kode_pengeluaran');
        $pengeluaran->jenis_pengeluaran = $request->input('jenis_pengeluaran');
        $pengeluaran->tanggal_pengeluaran = $request->input('tanggal_pengeluaran');
        $pengeluaran->jumlah_pengeluaran = $request->input('jumlah_pengeluaran');
        $pengeluaran->dokumentasi = $request->input('dokumentasi');
      $pengeluaran->email_user = $user;
        $pengeluaran->save();

        // Redirect atau lakukan sesuatu setelah penyimpanan data
        return redirect()->route('dashboard.pengeluaran.index');
        return view('dashboard.pengeluaran.create');
    }

    // Menyimpan data kas keluar yang baru dibuat
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'kode_pengeluaran' => 'required', // Memastikan kode pengeluaran unik
            'email_user' => 'required|exists:users,email', // Memeriksa keberadaan email pada tabel User
            'id_kategori_pengeluaran' => 'required|exists:kategori_pengeluaran,id', // Memeriksa keberadaan id kategori pada tabel KategoriPengeluaran
            'tanggal_pengeluaran' => 'required|date',
            'jumlah_pengeluaran' => 'required|numeric',

            // tambahkan validasi lainnya jika diperlukan
        ]);
        return view('dashboard.pengeluaran.create', compact('PengeluaranKas'));
        // Simpan data ke database
        PengeluaranKas::create($validatedData);

        return redirect()->route('dashboard.pengeluaran.index')->with('success', 'Data kas keluar berhasil ditambahkan!');
    }

    // Menampilkan detail dari sebuah data kas keluar
    public function show($id)
    {
        $PengeluaranKas = PengeluaranKas::findOrFail($id);
        return view('dashboard.pengeluaran.show', compact('PengeluaranKas'));
    }

    // Menampilkan formulir untuk mengedit data kas keluar
    public function edit($id)
    {
        $PengeluaranKas = PengeluaranKas::findOrFail($id);
        return view('dashboard.pengeluaran.edit', compact('PengeluaranKas'));
    }

    // Menyimpan perubahan pada data kas keluar yang sudah diedit
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jumlah' => 'required|numeric',
            // tambahkan validasi lainnya jika diperlukan
        ]);

        PengeluaranKas::whereId($id)->update($validatedData);

        return redirect()->route('dashboard.pengeluaran.index')->with('success', 'Data kas keluar berhasil diperbarui!');
    }

    // Menghapus data kas keluar
    public function destroy($id)
    {
        $PengeluaranKas = PengeluaranKas::findOrFail($id);
        $PengeluaranKas->delete();

        return redirect()->route('dashboard.pengeluaran.index')->with('success', 'Data kas keluar berhasil dihapus!');
    }
}
