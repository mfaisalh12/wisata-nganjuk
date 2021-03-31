@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="d-flex justify-content-around">
        <img src="images/cover.png" alt=""> 
        <div class="text-center">
            <h1><strong><span class="red">Selamat</span> Datang</strong></h1>
            <p>Wisataku merupakan website Penyedia Informasi dan Jasa Pemesanan Tiket mengenai tempat wisata yang berada di Kabupaten Nganjuk, Jawa Timur. Tersedia berbagai fitur yang dapat membantu dalam menemukan tempat tujuan wisata anda.</p>
        </div> 
        
    </div>
</div>
<div class="container">
<h1 class="text-center"><strong><span class="red">Jelajahi</span> Lokasi</strong></h1>
    <main class="row justify-content-center"> 
        @foreach($tempats as $tempat)
        <div class="col-md-4">
            <div class="card shadow mt-5">
            <div class="inner">
                <img src="{{ url('uploads') }}/{{ $tempat->gambar }}" class="card-img-top" alt="...">    
            </div>
                <div class="card-body">
                <h5 class="card-title">{{ $tempat->nama_tempat }}</h5>
                <p class="card-text">
                    <strong>Tiket :</strong> Rp. {{ number_format($tempat->harga)}} <br>
                    <strong>Lokasi :</strong> {{ $tempat->alamat }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $tempat->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $tempat->id }}" class="btn btn-primary"><i class="fa fa-ticket-alt"></i> Pesan</a>
            </div>
            </div> 
        </div>
        @endforeach
    </main>
</div>
@endsection
