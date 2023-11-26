@extends('layouts.admin.template')

@section('content')
<div class="container">
    <h3 class="pt-4 text-dark"><b>ABOUT</b></h3>
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row">
    <div class="col-md-4 m-3">
      <img src="{{ asset('img/arema.jpg') }}" class="card-img"
                            style="object-fit: cover; height: 50%;">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title">Aplikasi ini dibuat oleh</h5>
        <p class="card-text">
    <span class="font-weight-bold">Nama   :</span>
    <span class="ml-2">Annisa Rahmania Putri</span> <br>

    <span class="font-weight-bold">Prodi   :</span>
    <span class="ml-2">D3-MI PSDKU Kediri</span> <br>

    <span class="font-weight-bold">Nim     :</span>
    <span class="ml-2">2131730001</span> <br>

    <span class="font-weight-bold">Tanggal :</span>
    <span class="ml-2">15 September 2002</span>
  </p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
