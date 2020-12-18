@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/hpinfopro.css')}}">    
@section('title', 'Info')
@section('content')
    <div class="info">
    @foreach($hp as $hp)
        <h2>RIVIEW {{ $hp->namahp }}</h2>
        <img src="{{ ('css\img\a50s.jpg') }}">
        <p>Samsung baru saja mengumumkan bahwa salah satu ponsel terbarunya, Galaxy A50s, akan segera dijual di Indonesia.<br><br>
        Samsung menyebutkan bahwa ponsel tersebut dibanderol dengan harga Rp 4.099.000 untuk varian 4GB / 64 GB serta 
        Rp 4.899.000 untuk varian 6 GB/ 128 GB. <br><br>
        <b>1. Spesifikasi {{ $hp->namahp }}</b><br><br>
        Nah, spesifikasi Galaxy A50s sendiri sebenarnya identik dengan Galaxy A50. Hanya saja, desain punggung serta kamera 
        di Galaxy A50s kini diperbarui. Desain punggung Galaxy A50s kini mengusung motif geometris dengan efek holografis. <br><br>
        Untuk kamera, Samsung masih menerapkan konfigurasi triple camera beserta sebuah LED flash di Galaxy A50s.
        <br><br>
        Galaxy A50s mengusung panel Super AMOLED dengan ukuran 6,4 inci dan resolusi Full HD Plus. Layarnya juga sudah dibekali 
        dengan pemindai sidik jari yang sudah ditanam di bawah permukaan display. 
        <br><br>
        Fitur lainnya mencakup chip Exynos 9610, baterai 4.000 mAh yang mendukung pengisian daya cepat 15W, dan dukungan konektivitas 
        NFC untuk mengecek e-money dan fitur Samsung Pay.
        <br><br>
        Berikut spesifikasi lengkap {{ $hp->namahp }}<br><br> 
        <b>Dimensi</b><br>
        Memiliki berat 169 gram dengan ukuran 158,5 x 74,5 x 7,7 mm dengan layar ukuran 6,4 inci.
        <br><br> 
        <b>Display</b><br>
        Layar 6,3 inci itu menggunakan Super AMOLED 1.080 x 2.340 piksel, rasio 19,5:9
        <br><br> 
        <b>Kamera</b><br>
        Kamera depan 32 MP (f/2.0), kamera belakang 48 MP (f/2.0, lensa wide) dan 8 MP (f/2.2, lensa ultra-wide)
        <br><br> 
        <b>Baterai</b><br>
        Memiliki kapasitas 4000 mAh serta fast charging 15W
        <br><br> 
        <b>Jaringan</b><br>
        LTE, Wi-Fi (hingga 1.2 Gbps untuk dowdload dan upload), Bluetooth, USB tipe
        <br><br> 
        <b>Memori</b><br>
        RAM 4 GB dengan internal storage: 64 GB dan ada juga varian RAM 6 GB dengan internal: 128 GB.
        <br><br> 
        <b>2. Harga</b><br><br>
        Di toko online resmi samsung official store, {{ $hp->namahp }} itu dibanderol dengan kisaran harga 4 juta per unit.
        Anda dapat membelinya melalui tautan 
        <a href="https://www.samsung.com/id/smartphones/galaxy-s20/buy/?modelCode=SM-G985FZPDXID">berikut ini</a><br><br>
        Untuk RAM 4 GB/ROM 64 GB dilepas seharga Rp 4,099 juta. Namun selama pre-order ponsel ini dibanderol Rp {{ $hp->harga }}.<br><br>
        Sementara varian RAM 6 GB/ROM 128GB ditawarkan seharga Rp 4,899 juta. Selama masa pre-order ponsel tersebut dilepas seharga 
        Rp 4,599 juta.
        <br><br>
    </div>
    <br><br><br>
    @endforeach
@endsection