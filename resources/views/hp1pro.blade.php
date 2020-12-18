@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/hpinfopro.css')}}">    
@section('title', 'Info')
@section('content')
    <div class="info">
        @foreach($hp as $hp)
        <h2>RIVIEW {{ $hp->namahp }}</h2>
        <img src="{{ ('css\img\s20.png') }}">
        <p>Samsung kini hadir berkolaborasi dengan BTS, grup korea yang sangat terkenal di seluruh dunia termasuk Indonesia. 
        Kolaborasi ini hadir untuk Samsung Galaxy S20+ edisi BTS yang diluncurkan pada tanggal 9 Juli 2020.<br><br>
        <b>1. Spesifikasi {{ $hp->namahp }}</b><br><br>
        Spesifikasi yang ditawarkan Galaxy S20 Plus edisi spesial ini sebenarnya identik dengan Galaxy S20 Plus versi reguler, 
        begitu pula dengan Galaxy Buds Plus. <br><br>
        Hanya saja, kedua perangkat edisi BTS itu dihias dengan balutan warna ungu, 
        senada dengan ungkapan ikonik BTS, "I Purple You".
        <br><br>
        Punggung Galaxy S20 Plus edisi BTS sendiri dilapisi kaca dan cangkang berbahan 
        metal warna ungu. Ada pula hiasan hati bewarna ungu di modul kamera belakang. 
        <br><br>
        Di dalam Galaxy S20 Plus ini juga telah terpasang tema 
        BTS serta platform komunitas penggemar BTS bernama Weverse.<br><br>
        Berikut spesifikasi {{ $hp->namahp }}<br><br> 
        <b>Dimensi</b><br>
        Memiliki berat 186 gram dengan ukuran 16,19x7,37x0,78 centimeter dengan layar ukuran 6,7 inci.
        <br><br> 
        <b>Display</b><br>
        Layar 6,7 inci itu menggunakan Quad HD+ Dynamic AMOLED 2X
        Infinity-O Display (3200x1440) dengan kepadatan 525 ppi (pixel per inch) lebih rendah dari S20 yang memiliki kepadatan 563 ppi
        <br><br> 
        <b>Kamera</b><br>
        Kamera depan Dual Pixel AF 1.22 sama seperti S20, kamera belakang 1.4 pixel sama seperti S20
        <br><br> 
        <b>Baterai</b><br>
        Memiliki kapasitas 4500 mAh sama seperti S20
        <br><br> 
        <b>Jaringan</b><br>
        Sudah 5G, LTE, Wi-Fi (hingga 1.2 Gbps untuk dowdload dan upload), Bluetooth, USB tipe
        <br><br> 
        <b>Memori</b><br>
        RAM 12 GB dengan tiga varian internal storage: 128 GB, 256 GB, 512 GB.
        <br><br> 
        <b>2. Bonus picture card dari BTS</b><br><br>
        Jangan sampai terlewat, di dalam boxnya ada bonus lainnya. Di kotak buku petunjuk dan cashing ada kotak kecil yang berisi bonus 
        picture card dari member BTS. 
        <br><br>
        Tentu saja ini menjadi barang koleksi yang cukup esklusif bagi kamu semua para ARMY karena kalau mau mendapatkan kartu ini maka 
        kamu harus membeli Samsung Galaxy S20+ terlebih dahulu.
        <br><br>
        <b>3. Harga</b><br><br>
        Di toko online resmi samsung official store, Samsung Galaxy S20+ BTS Edition itu dibanderol dengan kisaran harga Rp{{ $hp->harga }} per unit.
        Anda dapat membelinya melalui tautan 
        <a href="https://www.samsung.com/id/smartphones/galaxy-s20/buy/?modelCode=SM-G985FZPDXID">berikut ini</a>
        <br><br>
        Dan juga anda dapat membeli earphone nirkabel Galaxy Buds Plus BTS Edition bisa dilakukan pula lewat halaman 
        <a href="https://www.samsung.com/id/audio-sound/galaxy-buds/galaxy-buds-plus-bts-b-purple-sm-r175nzpbxse/">berikut ini</a>
        dengan harga Rp 3 juta.
        <br><br>
        Serta di Tokopedia.com, misalnya, ada pelapak yang mematok harga Rp15.850.000, sedangkan di Shopee.co.id ada pelapak yang mematok 
        harga Rp16.450.000. Di Bukalapak.com, harga terendah dipatok Rp16.660.000, sementara di Blibli.com bandrol terendahnya Rp15.999.000.
        <br><br>
    </div>
    <br><br><br>
    @endforeach
@endsection