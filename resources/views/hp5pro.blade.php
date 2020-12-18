@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/hpinfopro.css')}}">    
@section('title', 'Info')
@section('content')
    <div class="info">
    @foreach($hp as $hp)
        <h2>RIVIEW {{ $hp->namahp }}</h2>
        <img src="{{ ('css\img\ip12.jpg') }}">
        <p>Phone 12 akhirnya akan segera bisa dibeli di Indonesia. Apple fanboy bisa memesan (pre order) iPhone 12, iPhone 12 mini, 
        iPhone 12 Pro, dan iPhone 12 Pro mulai 11 Desember mendatang di Digimap dan iBox pukul 00.01 WIB.<br><br>
        Untuk iPhone 12 Pro dan iPhone 12 Pro Max tersedia dalam tiga varian memori internal, mulai dari 128 GB, 256 GB, dan 512 GB.
        Ada empat warna yang bisa dilih yakni Graphite, Silver, Gold, dan Pasific Blue.<br><br>
        <b>1. Spesifikasi {{ $hp->namahp }}</b><br><br>
        iPhone 12 Pro dan iPhone 12 Pro Max memiliki spesifikasi lebih tinggi dibanding iPhone 12 reguler dan iPhone 12 mini. 
        Namun, iPhone 12 Pro memiliki bentang layar yang sama dengan iPhone 12 reguler yakni 6,1 inci.
        <br><br>
        Ukuran tersebut lebih kecil dibanding iPhone 12 Pro Max yang memiliki bentang layar 6,7 inci. iPhone 12 Pro dan iPhone 12 Pro Max 
        menawarkan kapasitas penyimpanan yang lebih besar, yakni hingga 512 GB.
        <br><br>
        Sektor kamera versi "Pro" juga lebih unggul dibanding iPhone 12 mini dan versi reguler. iPhone 12 Pro dan iPhone 12 Pro Max dibekali 
        tiga kamera belakang yang tersemat dalam modul berbentuk persegi.
        <br><br>
        Modul tersebut mencakup kamera utama 12MP, ultrawide 12MP, dan telefoto 12MP. Apple juga menambahkan beragam fitur kamera yang mumpuni.
        <br><br>
        Salah satunya adalah ProRAW yang mampu menghasilkan gambar RAW berkualitas tinggi. Ada pula dukungan perekaman video 4K 60 fps dan 
        mode perekaman Dolby Vision HDR.
        <br><br>
        Apple turut memasang sensor pemindai LiDAR Scanner, yang pertama kali diperkenalkan di iPad Pro 2020. Seperti iPhone 12 mini 
        maupun iPhone 12 reguler, iPhone 12 Pro dan iPhone 12 Pro Max ditenagai chipset Apple A14 Bionic dan dukungan koneksivitas 5G.
        <br><br>
        Namun, di Indonesia, koneksivitas 5G belum bisa digunakan karena belum tersedia. Semua lini iPhone 12 menjalankan sistem operasi iOS 14.
        <br><br>
        Berikut spesifikasi lengkap {{ $hp->namahp }}<br><br> 
        <b>Dimensi</b><br>
        Memiliki berat 228 gram dengan ukuran 160,8x78,1x7,4 mm dengan layar ukuran 6,7 inci.
        <br><br> 
        <b>Display</b><br>
        Layar 6,7 inci itu menggunakan OLED (2.778 x 1.284 piksel), 458 ppi
        <br><br> 
        <b>Kamera</b><br>
        Kamera depan 12 MP, kamera belakang Kamera wide 12 MP Kamera ultra-wide 12 MP, Kamera telephoto 12 MP
        <br><br> 
        <b>Baterai</b><br>
        Memiliki kapasitas 3.687mAh
        <br><br> 
        <b>Jaringan & Lainnya</b><br>
        Sudah 5G, LTE, Lidar Scanner, Fast charging 18 Watt, Wi-Fi 802.11, water resistant IP68, wireless charging 15 Watt
        <br><br> 
        <b>Memori</b><br>
        RAM 6 GB dengan tiga varian internal storage: 128 GB, 256 GB, 512 GB.
        <br><br> 
        <b>2. Harga</b><br><br>
        Di Indonesia, harga iPhone 12 Pro dan 12 Pro Max dijual mulai dari harga Rp 18,5 juta hingga Rp 27 juta.<br><br>
        Di toko online resmi iBox official store, {{ $hp->namahp }} itu dibanderol dengan kisaran harga Rp {{ $hp->harga }} per unit.
        Anda dapat membelinya melalui tautan 
        <a href="https://ibox.co.id/product/iphone-12-pro-max-ibox">berikut ini</a>
        <br><br>
    </div>
    <br><br><br>
    @endforeach
@endsection