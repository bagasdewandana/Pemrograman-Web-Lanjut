@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/homepro.css')}}"> 
@section('title', 'Halaman Home')
@section('content')
    <div class ="produk">
        <h2>PRODUK TERBARU</h2><br>
        <h5>Dapatkan info terbaru disini</h5>
    </div>
    <div class="kumpulanhp">
        <a href="https://www.samsung.com/id/offer/holiday-love/"><img src="{{ ('css\img\samsung.jpg') }}"></a>
    </div>
    <div class="hp">
        <div class="hp1">
            <a href="/hp2pro"><img src="{{ ('css\img\samsung1.png') }}"></a>
            <h4>Galaxy Fold</h4>
        </div>    
        <div class="hp1">
            <a href="/hp1pro"><img src="{{ ('css\img\samsung2.png') }}"></a>
            <h4>Galaxy S20+ BTS Edition</h4>
        </div>
        <div class="hp1">
            <a href="/hp3pro"><img src="{{ ('css\img\samsung3.png') }}"></a>
            <h4>Galaxy A50s</h4>
        </div>
        <div class="hp1">
            <a href="/hp4pro"><img src="{{ ('css\img\samsung4.png') }}"></a>
            <h4>Galaxy Note 20</h4>
        </div>
    </div>
    <div class="kumpulanhp2">
        <a href="https://www.apple.com/id/iphone/"><img src="{{ ('css\img\iphone.jpg') }}">
    </div>
    <div class="hpi">
        <div class="hp2">
            <a href="/hp6pro"><img src="{{ ('css\img\iphone1.png') }}"></a>
            <h4>Iphone XR</h4>
        </div>
        <div class="hp2">
            <a href="/hp5pro"><img src="{{ ('css\img\iphone2.png') }}"></a>
            <h4>Iphone 12 Pro Max</h4>
        </div>
        <div class="hp2">
            <a href="/hp8pro"><img src="{{ ('css\img\iphone3.png') }}"></a>
            <h4>Iphone 11</h4>
        </div>
        <div class="hp2">
            <a href="/hp7pro"><img src="{{ ('css\img\iphone4.png') }}"></a>
            <h4>Iphone X</h4>
        </div>
    </div>
@endsection
