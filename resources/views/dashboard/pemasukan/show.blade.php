<!-- resources/views/pemasukan/show.blade.php -->

@extends('layouts.app') <!-- Sesuaikan dengan layout yang Anda gunakan -->

@section('content')
    <div class="container">
        <h1>Data Kas Masuk</h1>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <dl class="row">
                    <dt class="col-sm-4">ID</dt>
                    <dd class="col-sm-8">{{ $PemasukanKas->id }}</dd>

                    <dt class="col-sm-4">Nama</dt>
                    <dd class="col-sm-8">{{ $PemasukanKas->nama }}</dd>

                    <dt class="col-sm-4">Jumlah</dt>
                    <dd class="col-sm-8">{{ $PemasukanKas->jumlah }}</dd>

                    <!-- Tambahkan informasi lainnya sesuai kebutuhan -->

                    <dt class="col-sm-4">Dibuat Pada</dt>
                    <dd class="col-sm-8">{{ $PemasukanKas->created_at->format('d-m-Y H:i:s') }}</dd>
                </dl>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('pemasukan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
