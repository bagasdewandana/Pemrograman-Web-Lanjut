@extends('Layouts.Masterpro')
<link rel="stylesheet" href="{{ asset('css/contactpro.css')}}">
@section('title', 'Halaman Contact')
@section('content')
    <div class="contact">
        <h2>CONTACT US</h2>
        <p> Apabila anda ingin mendapatkan informasi lebih lanjut dan apabila terdapat kesalahan informasi yang telah kami berikan 
        silahkan hubungi contact dibawah ini. Terimakasih atas antusias anda dalam mengunjungi website kami.
        <hr>
        <div class="gambar">
            <img src="{{ ('css\img\ig.png') }}">
            <p>@gadgetfight.id
        </div>
        <div class="gambar">
            <img src="{{ ('css\img\tw.png') }}">
            <p>@gadgetinfo
        </div>
        <div class="gambar">
            <img src="{{ ('css\img\fb.png') }}">
            <p>@gadgetfight.id
        </div>
        <div class="gambar2">
            <img src="{{ ('css\img\hp.png') }}">
            <p>082139188822 / 24 jam 
        </div>
        <div class="gambar2">
            <img src="{{ ('css\img\email.png') }}">
            <p>Email us<br>gadgetriview@gmail.com
        </div>
    </div>
@endsection