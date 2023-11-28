<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemasukanKas; // Sesuaikan dengan model PemasukanKas Anda

class PemasukanKasController extends Controller
{
    // Menampilkan semua data kas masuk
    public function index()
    {
        $PemasukanKass = PemasukanKas::all();
        return view('dashboard.pemasukan.index', compact('PemasukanKass'));
    }

    // Menampilkan formulir untuk membuat data kas masuk baru
    public function create()
    {
        return view('dashboard.pemasukan.create');
    }

    // Menyimpan data kas masuk yang baru dibuat
public function store(Request $request)
{
    // Validasi data (contoh)
    $request->validate([
        'kode_pemasukan' => 'required',
        'id_kategori_pemasukan' => 'required',
        'tanggal_pemasukan' => 'required',
        'jumlah_pemasukan' => 'required',
        // Tambahkan validasi sesuai kebutuhan
    ]);

    // Simpan data ke database
    Pemasukan::create([
        'kode_pemasukan' => $request->kode_pemasukan,
        'id_kategori_pemasukan' => $request->id_kategori_pemasukan,
        'tanggal_pemasukan' => $request->tanggal_pemasukan,
        'jumlah_pemasukan' => $request->jumlah_pemasukan,
        // Tambahkan field lainnya sesuai kebutuhan
    ]);

    // Redirect atau kirim pesan sukses
    return redirect()->route('pemasukan.index')->with('success', 'Data kas masuk berhasil ditambahkan');
}

    // Menampilkan detail dari sebuah data kas masuk
    public function show($id)
    {
        $PemasukanKas = PemasukanKas::findOrFail($id);
        return view('dashboard.pemasukan.show', compact('PemasukanKas'));
    }

    // Menampilkan formulir untuk mengedit data kas masuk
    public function edit($id)
    {
        $PemasukanKas = PemasukanKas::findOrFail($id);
        return view('dashboard.pemasukan.edit', compact('PemasukanKas'));
    }

    // Menyimpan perubahan pada data kas masuk yang sudah diedit
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jumlah' => 'required|numeric',
            // tambahkan validasi lainnya jika diperlukan
        ]);

        PemasukanKas::whereId($id)->update($validatedData);

        return redirect()->route('dashboard.pemasukan.index')->with('success', 'Data kas masuk berhasil diperbarui!');
    }

    // Menghapus data kas masuk
    public function destroy($id)
    {
        $PemasukanKas = PemasukanKas::findOrFail($id);
        $PemasukanKas->delete();

        return redirect()->route('dashboard.pemasukan.index')->with('success', 'Data kas masuk berhasil dihapus!');
    }
}
