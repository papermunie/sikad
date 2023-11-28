@extends('layouts.app') 

@section('content')
    <div class="container">
        <div style="margin-top: 150px;">
            <h2>Tambah Data Kas Keluar</h2>
            <form method="get" action="{{ route('pengeluaran.create')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggalPengeluaran" style="margin-top: 10px;">Tanggal Pengeluaran</label>
                            <input type="date" name="tanggal_pengeluaran" id="tanggalPengeluaran" class="form-control mb-3" style="width: 500px; border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <label for="kategoriPengeluaran">Jenis Pengeluaran</label>
                            <select name="jenis_pengeluaran" id="kategoriPengeluaran" class="form-select mb-3" style="width: 500px; border: 1px solid black;">
                                <option selected value="">Pilih Jenis Pengeluaran</option>
                                <option value="amal_harian">Amal Harian</option>
                                <option value="sumbangan">Sumbangan</option>
                                <option value="infaq">Infaq</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlahPengeluaran">Jumlah Pengeluaran</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah_pengeluaran" required style="width: 500px; border: 1px solid black;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kodePengeluaran" style="margin-top: 10px;">Kode Pengeluaran</label>
                            <input type="text" class="form-control" id="kode" name="kode_pengeluaran" required style="width: 500px; border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <label for="dokumentasi" style="margin-top: 16px;">Dokumentasi</label>
                            <input type="file" class="form-control" id="dokumentasi" name="dokumentasi[]" multiple accept="image/*, application/pdf" style="width: 500px; border: 1px solid black;">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="margin-top: 20px;" a href="{{ route('pemasukan.index') }};">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
