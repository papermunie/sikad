@extends('layouts.app') 

@section('content')
    <div class="container">
        <div style="margin-top: 150px;">
            <h2>Tambah Data Kas Masuk</h2>
            <form action="{{ route('pemasukan.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggalPemasukan" style="margin-top: 10px;">Tanggal Pemasukan</label>
                            <input type="date" name="tanggal_pemasukan" id="tanggalPemasukan" class="form-control mb-3" style="width: 500px; border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <label for="kategoriPemasukan">Jenis Pemasukan</label>
                            <select name="id_kategori_pemasukan" id="kategoriPemasukan" class="form-select mb-3" style="width: 500px; border: 1px solid black;">
                                <option selected value="">Pilih Jenis Pemasukan</option>
                                <option value="Amal Harian" name="Amal Harian">Amal Harian</option>
                                <option value="Sumbangan" name="Sumbangan">Sumbangan</option>
                                <option value="Infaq" name="Infaq">Infaq</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlahPemasukan">Jumlah Pemasukan</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" required style="width: 500px; border: 1px solid black;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kodePemasukan" style="margin-top: 10px;">Kode Pemasukan</label>
                            <input type="text" class="form-control" id="kode" name="kode" required style="width: 500px; border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <label for="dokumentasi" style="margin-top: 16px;">Dokumentasi</label>
                            <input type="file" class="form-control" id="dokumentasi" name="dokumentasi[]" multiple accept="image/*, application/pdf" style="width: 500px; border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
