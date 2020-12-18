@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/hpinfopro.css')}}">    
@section('title', 'Info')
@section('content')
    <div class="info">
    @foreach($hp as $hp)
        <h2>RIVIEW {{ $hp->namahp }}</h2>
        <img src="{{ ('css\img\ip11.jpg') }}">
        <p>iPhone 11 Pro dan iPhone 11 Pro Max merupakan penerus dari iPhone XS dan iPhone XS Max, iPhone 11 merupakan penerus dari iPhone XR. 
        Ya, iPhone 11 diposisikan sebagai alternatif yang lebih murah dari duo iPhone 11 Pro<br><br>
        <b>1. Spesifikasi {{ $hp->namahp }}</b><br><br>
        iPhone XR hadir dengan kamera tunggal 12 megapiksel wide-angle. Nah, iPhone 11 tampil dengan teknologi kamera yang lebih canggih 
        karena dibekali dengan dual-camera atau dua kamera utama sekaligus.
        <br><br>
        Konfigurasinya juga cukup menarik 12 megapiksel wide-angle + 12 megapiksel TrueDepth Camera. Kamera tersebut sudah mendukung kemampuan
        optical zoom 2x. Dengan kamera TrueDepth, diyakini iPhone 11 mampu mengambil foto Potrait (latar belakang blur) dengan lebih ciamik lagi.
        <br><br>
        Satu hal yang menjadi pembeda lain dibandingkan iPhone XR, kamera iPhone 11 dikatakan mampu mengambil foto low-light jauh lebih baik. 
        <br><br>
        Kemampuan untuk merekam video 4K juga dihadirkan di iPhone 11. Kamera iPhone 11 mampu merekam video dengan resolusi hingga 4K 60fos, 
        slow-mo, dan time lapse.
        <br><br>
        Di bagian depan, terdapat kamera 12 megapiksel. Kamera depan itu juga mampu mengambil video 4K 60fps dan slow-mo.
        <br><br>
        iPhone 11 sendiri hadir dengan desain yang tidak jauh berbeda dari iPhone XR. Di bagian depan, masih ada sedikit notch, tempat 
        ditaruhnya kamera depan.
        <br><br>
        Sementara itu, di bagian depan dan belakang perangkat masih menggunakan kaca sehingga perangkat ini bisa memanfaatkan fitur 
        pengisian daya secara nirkabel. Bagian rangkanya sendiri terbuat dari baja, membuatnya tampak mewah.
        <br><br>
        iPhone 11 juga sudah dibekali kemampuan tahan air dan debu. Ia sudah dibekali dengan sertifikasi IP68.
        <br><br>
        Berikut spesifikasi lengkap {{ $hp->namahp }}<br><br> 
        <b>Dimensi</b><br>
        Memiliki berat 194 gram dengan ukuran 150.9 x 75.7 x 8.3 mm.
        <br><br> 
        <b>Display</b><br>
        Layar 6,1 inci itu menggunakan IPS LCD (878 x 1.792 piksel), rasio 19,5:9
        <br><br> 
        <b>Kamera</b><br>
        Kamera depan 12 megapiksel f/2.2, TrueDepth Camera, kamera belakang 12 megapiksel, aperture f/1.8, wide PDAF; 12 megapiksel, 
        aperture f/2.4, ultrawide
        <br><br> 
        <b>Baterai</b><br>
        Memiliki kapasitas 3110 mAh 
        <br><br> 
        <b>Jaringan</b><br>
        4G, Bluetooth 5.0, NFC, Wi-Fi 802.11 a/b/g/n/ac/ax, hotspot
        <br><br> 
        <b>Memori</b><br>
        RAM 4 GB dengan tiga varian internal storage: 64 GB, 128 GB, 256 GB.
        <br><br> 
        <b>2. Harga</b><br><br>
        Untuk urusan harga, hingga saat ini, Apple masih belum mengumumkan untuk pasaran Indonesia. Akan tetapi, mari mengacu kepada harga 
        iPhone 11 di Singapura. Pasalnya, harga iPhone di Indonesia seringkali tidak jauh berbeda dari pasar Singapura.<br><br>
        Di toko online resmi iBox official store, {{ $hp->namahp }} itu dibanderol dengan kisaran harga Rp {{ $hp->harga }} per unit.
        Anda dapat membelinya melalui tautan 
        <a href="https://ibox.co.id/product/apple-iphone-11-new-package">berikut ini</a>
        <br><br>
    </div>
    <br><br><br>
    @endforeach
@endsection