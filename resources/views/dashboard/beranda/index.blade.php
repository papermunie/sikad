@extends('layouts.app')

@section('navbar') 
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
     .card
     {
      background-color: #C5C5F1;
      text-align: center;
     }
     .card img{
      width: 100px;
      margin: 0 auto;
       display: block;
     }
     </style>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <h2 class="text-center mt-4"><b>Halo, Selamat Datang Di Aplikasi SIKAD<b></h2>
    <h5 class="text-center mt-4"><b>Silahkan Memilih Login<b></h5> <br>
    <div class="container mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
            <a href="{{ route('pemasukan.index') }}">
                <div class="card text-dark">
                    <div class="card-header">KETUA DKM</div>
                    <div class="card-body">

                        <img src="{{ asset('../picture/dkm.png') }}">
                    </div>
                </div>
    </a>
            </div>
            <div class="col-md-4">
                <div class="card text-dark">
                    <div class="card-header">BENDAHARA</div>
                    <div class="card-body">

                        <img src="{{ asset('../picture/bendahara.png') }}">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark">
                    <div class="card-header">WARGA SEKOLAH</div>
                    <div class="card-body">
                       
                        <img src="{{ asset('../picture/wargasekolah.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMp9MvcJ443WsxXw5M7tB" crossorigin="anonymous"></script>
</body>
</html>

@endsection