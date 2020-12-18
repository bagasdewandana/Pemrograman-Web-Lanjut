@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/hpinfopro.css')}}">    
@section('title', 'Info')
@section('content')
    <div class="info">
    @foreach($hp as $hp)
        <h2>RIVIEW {{ $hp->namahp }}</h2>
        <img src="{{ ('css\img\ipxr.jpg') }}">
        <p>Apple meresmikan kehadiran trio iPhone XS, XS Max, dan XR terbaru pada pekan lalu. Dalam acara peluncuran yang digelar di 
        Amerika Serikat, Apple memamerkan fitur-fitur baru sekaligus kemampuan chip A12 Bionic yang tertanam di ketiga iPhone.<br><br>
        Namun ada komponen yang tidak disebutkan, yakni kapasitas RAM dan baterai. Belakangan, sebuah dokumen di situs Kementerian Industri 
        dan Teknologi China (TENAA) mengungkap  dua spesifikasi yang sebelumnya masih misterius itu.<br><br>
        Sebelum mulai menjual iPhone baru di Negeri Tirai Bambu, pabrikan gadget memang diharuskan mendaftarkan perangkat barunya di 
        kementerian terkait. Informasi tersebut lantas dipublikasikan.<br><br>
        <b>1. Spesifikasi {{ $hp->namahp }}</b><br><br>
        iPhone XS Max yang berukuran layar lebih besar, memiliki baterai berkapasitas lebih tinggi pula, mencapai 3.174 mAh. Klaim Apple, 
        iPhone jumbo dengan layar OLED 6,5 inci sanggup menyala 90 menit lebih lama dari iPhone X.
        <br><br>
        Terakhir, iPhone XR yang berlayar LCD 6,1 inci memiliki baterai 2.942 mAh. Menurut Apple, model termurah ini justru memiliki ketahanan 
        baterai terlama di antara jajaran iPhone terbaru, karena resolusi layarnya juga lebih kecil dari iPhone XS dan iPhone XS Max.
        <br><br>
        iPhone XS dan iPhone XS Max memiliki RAM berkapasitas 4 GB, sementara iPhone XR yang lebih murah dibekali RAM 3 GB. 
        <br><br>
        Lalu, untuk kapasitas baterai, disebutkan bahwa iPhone XS yang memiliki layar OLED 5,8 inci datang dengan baterai berkapasitas 2.658 mAh.
        <br><br>
        Berikut spesifikasi lengkap {{ $hp->namahp }}<br><br> 
        <b>Dimensi</b><br>
        Memiliki berat 194 gram dengan ukuran 75,5 x 8,3 mm, 326 ppi dengan layar ukuran 6,1 inci.
        <br><br> 
        <b>Display</b><br>
        Layar 6,1 inci itu menggunakan Liquid Retina LCD (1792 x 828 piksel), 326 ppi
        <br><br> 
        <b>Kamera</b><br>
        Kamera depan 12 MP f/2.2, kamera belakang 12 MP d/1.8 smart HDR, OIS
        <br><br> 
        <b>Baterai</b><br>
        Memiliki kapasitas 2.942 mAh 1,5 jam lebih tahan lama dibanding iPhone 8 plus
        <br><br> 
        <b>Jaringan & Lainnya</b><br>
        LTE, GSM, CDMA, HSPA, EVDO, Wi-Fi 802.11 a/b/g/n/ac. dual-band, hotspot
        <br><br> 
        <b>Memori</b><br>
        RAM 3 GB dengan tiga varian internal storage: 64 GB, 128 GB, 256 GB.
        <br><br> 
        <b>2. Harga</b><br><br>
        iPhone XS dan XS Max rencananya akan dibandero dengan harga masing-masing dipatok mulai 999 dollar AS (Rp 14,8 juta) 
        dan 1.099 (Rp 16,4 juta) .<br><br>
        Di toko online resmi iBox official store, {{ $hp->namahp }} itu dibanderol dengan kisaran harga Rp {{ $hp->harga }} per unit.
        Anda dapat membelinya melalui tautan 
        <a href="https://www.ibox.co.id/product/apple-iphone-xr-ibox">berikut ini</a>
        <br><br>
    </div>
    <br><br><br>
    @endforeach
@endsection