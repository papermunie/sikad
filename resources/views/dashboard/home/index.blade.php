@extends('layouts.app')
@section('navbar')
   
@endsection

@section('content')
    <div class="container d-flex align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="col-md-50 offset-md-0.5">
                <div style="display: flex; align-items: center; margin-left: 0px;">

                    <div style="flex: 5;">
                        <h3 style="font-size: 3rem; text-align: left;"><strong>Aplikasi Pengelola Sistem Keuangan</strong></h3>
                        <h4 style="font-size: 2.5rem; text-align: left; margin-bottom: 15px;"><strong>Masjid Dengan Praktis</strong></h4>
                        <h5 style="font-size: 2rem; text-align: left; margin-bottom: 10px;"><strong>for Masjid Adz-Dzikru</strong></h5>
                        
                        <a href="{{ route('beranda.index') }}" class="btn btn-primary" style="background-color: #FDD4B6; color: black; font-size: 1.5rem;">DASHBOARD</a>
                    </div>

                    <!-- Tambahkan gambar di sini -->
                    <img src="{{ asset('../picture/logo.png') }}" width='400px' style="margin-left: 10px;">
                </div>
            </div>
        </div>
    </div>
@endsection
