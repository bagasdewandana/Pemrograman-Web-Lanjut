@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/hpinfopro.css')}}">    
@section('title', 'Info')
@section('content')
    <div class="info">
    @foreach($hp as $hp)
        <h2>RIVIEW {{ $hp->namahp }}</h2>
        <img src="{{ ('css\img\note.jpg') }}">
        <p>Samsung resmi merilis smartphone Galaxy Note 20 series, yakni Galaxy Note 20 reguler dan Note 20 Ultra.<br><br>
        Sebagai penerus Galaxy Note 10 series, duo Galaxy Note 20 series membawa beberapa peningkatan.<br><br>
        <b>1. Spesifikasi {{ $hp->namahp }}</b><br><br>
        Galaxy Note 20 Series memiliki dua lini, yakni Galaxy Note 20 Reguler dan Note 20 Ultra, yang berbeda dari segi ukuran hingga spesifikasi.
        <br><br>
        Dimensi keduanya hanya terpaut tipis. Galaxy Note 20 Ultra berukuran 164,8 x 77,2 x 8,1 mm dengan berat 208 gram, sementara Galaxy Note 
        20 Reguler memiliki ukuran 161,6 x 75,2 x 8,3 mm.
        <br><br>
        Dari segi layar, Note 20 Ultra dibekali dengan layar 6,9 inci dengan resolusi 1.440x3.088 piksel. Sementara itu, Note 20 versi reguler 
        memiliki bentang layar yang lebih kecil, 6,7 inci, dengan resolusi 1.080x2.400 piksel. Keduanya sama-sama memiliki desain layar 
        Infinity-O, dengan lubang kamera di sisi atas. 
        <br><br>
        Galaxy Note 20 Series juga akan tersedia dalam versi 5G di beberapa negara, dengan pilihan kapasitas RAM dan ROM 8GB/128GB serta 
        8GB/256GB untuk versi reguler. Adapun untuk versi Note 20 Ultra, Samsung memberikan pilihan 8GB/256GB dan 8GB/512GB untuk versi 
        LTE, dan tiga pilihan untuk versi 5G, masing-masing 12GB/28GB, 12GB/256GB dan 12GB/512GB.
        <br><br>
        Berikut spesifikasi lengkap {{ $hp->namahp }}<br><br> 
        <b>Dimensi</b><br>
        Memiliki berat 192 gram dengan ukuran 161.6 x 75.2 x 8.3 mm dengan layar ukuran 6,7 inci.
        <br><br> 
        <b>Display</b><br>
        Layar 6,7 inci itu menggunakan Super AMOLED Plus (6,7 inch, 1080x2400 pixel)
        <br><br> 
        <b>Kamera</b><br>
        Kamera depan 10 MP, f/2,2 (wide angle), Dual Pixel PDAF, kamera belakang 12 MP, f/1,8 (wide angle) 64 MP, 
        f/2,0 (telephoto) 12 MP, f/2,2 (ultra wide)
        <br><br> 
        <b>Baterai</b><br>
        Memiliki kapasitas 4300 mAh
        <br><br> 
        <b>Jaringan</b><br>
        Sudah 5G, LTE, Wi-Fi (hingga 1.2 Gbps untuk dowdload dan upload), Bluetooth, USB tipe
        <br><br> 
        <b>Memori</b><br>
        RAM 8 GB dengan tiga varian internal storage: 256 GB.
        <br><br> 
        <b>2. Harga</b><br><br>
        Galaxy Note 20 dijual dengan harga Rp14.499.000, sedangkan Galaxy Note 20 Ultra dijual seharga Rp17.999.000 untuk versi 8GB/256 GB 
        dan Rp19.999.000 untuk pilihan 8GB/512GB.<br><br>
        Di toko online resmi samsung official store, {{ $hp->namahp }} itu dibanderol dengan kisaran harga Rp {{ $hp->harga }} per unit.
        Anda dapat membelinya melalui tautan 
        <a href="https://www.samsung.com/id/smartphones/galaxy-note20/buy/">berikut ini</a>
        <br><br>
    </div>
    <br><br><br>
    @endforeach
@endsection