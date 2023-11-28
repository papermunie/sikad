<!-- resources/views/pemasukan/index.blade.php -->
@php use Illuminate\Support\Facades\Storage;use Illuminate\Support\Facades\URL; @endphp
@extends('layouts.app')
@section('title', 'Mengelola Pemasukan Kas')
@section('content')
@section('content')
    <div class="container">
        <h1>Daftar Kas Masuk</h1>

        <a href="{{ route('pemasukan.create') }}" class="btn btn-primary mb-3">Tambah Kas Masuk</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                    <th>No.</th>
                    <th>Kode Pemasukan</th>
                    <th>Jenis Pemasukan</th>
                    <th>Tanggal Pemasukan</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($PemasukanKass as $index => $PemasukanKas)
                <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $PemasukanKas->kode_pemasukan }}</td> 
                        <td>{{ $PemasukanKas->jenis_pemasukan }}</td> 
                        <td>{{ $PemasukanKas->tanggal_pemasukan }}</td> 
                        <td>{{ $PemasukanKas->jumlah_pemasukan }}</td> 
                        <td>
                            <a href="{{ route('pemasukan.show', $PemasukanKas->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('pemasukan.edit', $PemasukanKas->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('pemasukan.destroy', $PemasukanKas->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
