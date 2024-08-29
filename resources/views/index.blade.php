@extends('layouts.header')
@section('content')

<body>
    <div class="container-fluid position-relative text-center">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/img/logo.png')}}" alt="Warteg Mang Apan" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="home.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="menu.html">MENU</a>
                    </li>`
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">KONTAK</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            @method("POST")
                            <button type="submit" class="nav-link font-weight-bold" style="background-color:rgba(0, 0, 0, 0);">LOGOUT</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content d-flex flex-column justify-content-center align-items-center">
            <h1 class="h1-description">Rasakan sensasi makan dengan banyak rasa yang variatis dan harga terjangkau</h1>
            <button class="button-buy btn mt-3"><a href="#menu" style="text-decoration: none;">BELI SEKARANG</a></button>
        </div>

        <section class="menu" id="menu">
            <div class="container">
                    <div class="title-menu text-center">
                        Menu
                    </div>
                    <div class="fill-menu">
                        <div class="row mx-auto">
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/ayam.jpg" alt=""></div>
                                <div class="nama-menu">Ayam Goreng</div>
                                <div class="harga ">Rp. 7000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/tempe.jpg" alt=""></div>
                                <div class="nama-menu">Tempe Orek</div>
                                <div class="harga ">Rp. 7000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/sayur sop.jpeg" alt=""></div>
                                <div class="nama-menu">Sayur Sop</div>
                                <div class="harga ">Rp. 7000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/kentang.jpeg" alt=""></div>
                                <div class="nama-menu">Mustofa</div>
                                <div class="harga ">Rp. 5000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/rendang.jpg" alt=""></div>
                                <div class="nama-menu">Rendang</div>
                                <div class="harga ">Rp. 10000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/kerupuk.jpeg" alt=""></div>
                                <div class="nama-menu">Kerupuk</div>
                                <div class="harga ">Rp. 2000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/liwet.jpg" alt=""></div>
                                <div class="nama-menu">Nasi Liwet</div>
                                <div class="harga ">Rp. 7000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/jeruk.jpg" alt=""></div>
                                <div class="nama-menu">Es Jeruk</div>
                                <div class="harga ">Rp. 7000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/es.jpeg" alt=""></div>
                                <div class="nama-menu">Es Teh Manis</div>
                                <div class="harga ">Rp. 5000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/kopi.jpeg" alt=""></div>
                                <div class="nama-menu">Kopi Hitam</div>
                                <div class="harga ">Rp. 5000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/capcay.jpg" alt=""></div>
                                <div class="nama-menu">Capcay</div>
                                <div class="harga ">Rp 7000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="gambar"><img src="assets/img/bakwan.jpg" alt=""></div>
                                <div class="nama-menu">Bakwan Goreng</div>
                                <div class="harga ">Rp 3000</div>
                                <div class="tombol"><button class="button-keranjang "><i>Keranjang</i></button></div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>


@endsection