@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/hpinfopro.css')}}">    
@section('title', 'Info')
@section('content')
    <div class="info">
        @foreach($hp as $hp)
        <h2>RIVIEW {{ $hp->namahp }}</h2>
        <img src="{{ ('css\img\fold.jpg') }}">
        <p>Ponsel lipat Galaxy Fold dari Samsung sudah bisa dipesan di Indonesia dengan banderol Rp 30.888.000 lewat 
            sesi pre-order yang digelar pada Jumat (13/12/2019).<br><br>
            Harga tersebut menjadikan Galaxy Fold ponsel termahal Samsung di Indonesia, sekaligus terunik karena memiliki layar 
            fleksibel berukuran 7,3 inci yang bisa ditekuk-tekuk.<br><br>

        <b>1. Spesifikasi {{ $hp->namahp }}</b><br><br>
        Galaxy Fold juga hadir dengan Flex Mode yang tak ditemukan di pendahulunya. Mode ini memungkinkan Anda menggunakan ponsel ini 
        untuk menonton video dengan tombol playback terpisah, mengoperasikan kamera dengan berbagai fitur-fiturnya, hingga menjalankan 
        banyak aplikasi sekaligus. <br><br>
        Samsung membekali Galaxy Fold dengan teknologi antarmuka One UI yang didesain khusus untuk smartphone layar lipat.
        <br><br>
        Teknologi ini memiliki fitur app continuity. Di mana, ketika pengguna membuka aplikasi dari layar kecil di bagian depan, 
        lalu membuka lipatannya, maka tampilan layarnya akan langsung menyesuaikan (7,3 inci).<br><br>
        Berikut spesifikasi Samsung Galaxy S20+ BTS Edition<br><br> 
        <b>Dimensi</b><br>
        Dalam keadaan layar dibentangkan: 160,9 x 117,9 x 6,9mm <br>
        Dalam keadaan layar dilipat: 160,9 x 62,9 x 15,5mm
        <br><br> 
        <b>Display</b><br>
        7,3 inci Foldable Dynamic AMOLED, 2.152 x 1.536 piksel, 4.2: 3 <br>
        Cover display 4,6 inci Super AMOLED, 1.680 x 720 piksel, 21:9
        <br><br> 
        <b>Kamera</b><br>
        Kamera belakang 12 megapiksel f/1.5 atau f/2.4, wide (27mm), OIS 12 megapiksel f/2.4, telephoto (52mm) OIS, 2x zoom 
        16 megapiksel f/2.2, ultra wide (12mm),<br> 
        kamera depan 10 megapiksel f/1.9, wide (26mm) 8 megapiksel depth sensor 
        <br><br> 
        <b>Baterai</b><br>
        Memiliki kapasitas 4380 mAh
        <br><br> 
        <b>Chip</b><br>
        Qualcomm Snapdragon 855 (1 x 2,84 GHz Kryo 485 + 3 x 2,42 GHz Kryo 485 + 4 x 1,78 GHz Kryo 485, GPU Adreno 640).
        <br><br> 
        <b>Memori</b><br>
        RAM 12 GB
        <br><br> 
        <b>2. Harga</b><br><br>
        Di toko online resmi samsung official store, Samsung Galaxy Fold itu dibanderol dengan kisaran harga Rp {{ $hp->harga }} per unit.
        Tapi sayangnya  
        <a href="https://www.samsung.com/id/smartphones/galaxy-z/galaxy-fold-cosmos-black-512gb-sm-f900fzkdxid/buy/">berikut ini</a>
        dengan harga 30 juta per unit samsung galaxy fold ini menjadi smartphone Samsung termahal yang ada di Tanah Air.
        <br><br>
    </div>
    <br><br><br>
    @endforeach
@endsection