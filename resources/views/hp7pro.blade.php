@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/hpinfopro.css')}}">    
@section('title', 'Info')
@section('content')
    <div class="info">
    @foreach($hp as $hp)
        <h2>RIVIEW {{ $hp->namahp }}</h2>
        <img src="{{ ('css\img\ipx.jpg') }}">
        <p>Produk iPhone terbaru dari Apple memiliki keunggulan yang menjadi tolok ukur baru, baik bagi konsumen maupun produsen. 
        Meski begitu, masih menarik untuk menengok kembali iPhone generasi sebelumnya. Salah satu alasannya karena harganya yang sudah lebih 
        terjangkau.<br><br>
        Di 2020 ini, iPhone X tentunya masih sangat menarik untuk dipertimbangkan. Selain telah mengusung layar dengan bezel tipis, 
        spesifikasinya yang masih tinggi, dan harga iPhone X, tentunya, sudah lebih murah dari sebelumnya. <br><br>
        Selain unggul berkat inovasi desainnya, kelebihan iPhone X memiliki berhasil hadir sebagai pembanding saat smartphone dari 
        merek lain dirilis. Meski kamu ingin membeli smartphone entry-level, mungkin kamu secara tidak sadar membandingkan fiturnya dengan 
        iPhone X.<br><br>
        <b>1. Spesifikasi {{ $hp->namahp }}</b><br><br>
        Teknologi Super Retina yang diadaptasikan pada iPhone X meningkatkan kualitas panel layar OLED dengan tampilan warna jernih, dan warna 
        hitam yang kontras. Layar Super Retina ini juga menjadi kombinasi elegan dengan desain baru iPhone X yang seluruhnya dilapisi kaca.
        <br><br>
        Kelebihan iPhone X juga cocok untuk pengguna yang menyukai mobile photography. Dukungan tampilan HDR yang mendukung Dolby Vision dan 
        HDR10 membuat visualisasi foto dan video jadi lebih alami. Dukungan fitur True Tone juga membuat warna jadi semakin dinamis.
        <br><br>
        Spesifikasi iPhone X kembali unggul dari segi performa. Dukungan prosesor Bionic A11 memungkinkan sistem pelacakan kelas dunia. 
        Mulai dari kalibrasi kamera, pendeteksi gerakan yang akurat, hingga penggunaan energi yang lebih efisien. 
        <br><br>
        Fitur prosesor Bionic A11 ini merupakan desain CPU hexa-core yang berfungsi jauh lebih cepat ketimbang prosesor A10 Fusion. 
        Berkat keunggulan dan efisiensi prosesor Bionic A11, Apple mengklaim bahwa iPhone X bisa digunakan 2 jam lebih lama ketimbang iPhone 7.
        <br><br>
        Berikut spesifikasi lengkap {{ $hp->namahp }}<br><br> 
        <b>Dimensi</b><br>
        Memiliki berat 174 gram dengan ukuran 143.6mm x 70.9 x 7.7 mm
        <br><br> 
        <b>Display</b><br>
        Layar 5.8 inci itu menggunakan SUPER AMOLED (1.125 x 2.436 pixel), aspek rasio 19,5:9
        <br><br> 
        <b>Kamera</b><br>
        Kamera depan 7 MP, f/2.2, kamera belakang Dual 12 MP (f/1.8) + 12 MP (f/2.4), OIS, phase detection autofocus, 2x optical zoom, 
        quad-LED dual-tone flash
        <br><br> 
        <b>Baterai</b><br>
        Memiliki kapasitas 2.716 mAh
        <br><br> 
        <b>Jaringan & Lainnya</b><br>
        LTE, Wi-Fi Standard 802.11 a/b/g/n/ac, Bluetooth v5.0, Lightning USB 2.0, NFC, GPS
        <br><br> 
        <b>Memori</b><br>
        RAM 3 GB dengan dua varian internal storage: 64 GB, 256 GB.
        <br><br> 
        <b>2. Harga</b><br><br>
        Di toko online resmi iBox official store, {{ $hp->namahp }} itu dibanderol dengan kisaran harga Rp {{ $hp->harga }} per unit.
        Anda dapat membelinya melalui tautan 
        <a href="https://www.ibox.co.id/product/apple-iphone-x-ibox-1">berikut ini</a>
        <br><br>
    </div>
    <br><br><br>
    @endforeach
@endsection