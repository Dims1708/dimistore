<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dimi Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alan+Sans:wght@300..900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            padding: 0px;
            background: #4c4c4f;
            background-size: unset;
            color: white;
            font-family: "Alan Sans", sans-serif;
        }

        nav {
            width: 100%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            line-height: 80px;
            position: sticky;
            top: 0;
            background: #37353E;
            z-index: 10;
            padding: 0px 30px;
        }

        nav ul {
            display: flex;
            gap: 30px;
            margin: 0px;
            align-content: center;
            list-style: none;
            color: #00FFE8;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            border-radius: 3px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .nav-links,
            .InputContainer,
            .auth-buttons {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            /* ketika aktif */
            nav.active .nav-links,
            nav.active .InputContainer,
            nav.active .auth-buttons {
                display: flex;
                flex-direction: column;
                background: #37353E;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                padding: 20px;
                gap: 20px;
            }
        }

        .InputContainer {
            height: 40px;
            display: flex;
            width: 30%;
            align-items: center;
            justify-content: center;
            background-color: rgb(255, 255, 255);
            border-radius: 6px;
            overflow: hidden;
            cursor: pointer;
            gap: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.075);
        }

        .input {
            width: 170px;
            height: 100%;
            border: none;
            outline: none;
            font-size: 0.9em;
            caret-color: rgb(255, 81, 0);
        }

        .auth-buttons {
            display: flex;
            gap: 10px; /* jarak antar tombol */
        }

            /* Tombol isi */
        .btn-light {
            background-color: cyan;
            color: #37353E;
            padding: 8px 24px;
            border-radius: 6px; /* biar kotak agak rounded */
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
            border: 2px solid cyan;
        }

        .btn-light:hover {
            background-color: #37353E; /* hover neon hijau */
            color: #00FFE8;
        }

         /* Tombol outline */
        .btn-outline-light {
            border: 2px solid cyan;
            color: cyan;
            padding: 8px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-outline-light:hover {
            background-color: cyan;
            color: #1e1e26;
        }


        #promo {
            color: #00FFE8;
        }

        #product {
            color: #00FFE8;
        }

        #ewallet {
            color: #00FFE8;
        }

        #pulsa {
            color: #00FFE8;
        }

        #voucher {
            color: #00FFE8;
        }

        .bg-custom {
            color: white;
            background-color: rgba(255, 255, 255, 0.187);
            font-size: 18px;
        }

        .label-diskon {
            position: absolute;
            left: -10px;
            top: 30px;
            width: 80px;
        }

        .card {
            width: 170px;        /* samakan ukuran card */
            height: 220px;
            border: 1px solid none;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            background-color: #37353E;
            color: #00FFE8;
        }

        .card:hover {
            border: 1px solid #00FFE8;
            transform: scale(1.05);
            box-shadow: 0px 0px 15px rgba(0, 255, 232, 0.5);
        }

        .card img {
            width: 100%;         /* gambar akan menyesuaikan lebar card */
            height: 150px;       /* tinggi gambar tetap */
            object-fit: cover;   /* agar gambar tidak gepeng */
        }

        .card h3{
            font-size: 15px;
            font-weight: 600;
            margin-top: 2px;
        }

        #copyright {
            text-align: center;
            width: 100%;
            padding-bottom: 5px;            
            background-color: #37353E;
            color: #00FFE8;
        }

        #contact {
            background: #37353E;
            padding: 50px 0px 50px 0px;
        }

        .footer {
            width: 100%;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
        }

        .footer-section {
            width: 20%;
            margin: 0 auto;
        }

        a {
            color: #00FFE8;
            text-decoration: none;
        }

        ion-icon {
            color: #00FFE8;
            font-size: 25px;
            margin: 0px 10px;
            text-decoration: none;
        }

        ion-icon:hover {
            animation: neonPulse 1.5s infinite alternate;
        }

        /* Animasi pulse glow */
        @keyframes neonPulse {
        0% {
            filter: drop-shadow(0 0 5px cyan) drop-shadow(0 0 10px cyan);
            }
        100% {
            filter: drop-shadow(0 0 20px cyan) drop-shadow(0 0 40px cyan);
            }
        }

    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset('image/logo.png')}}" width="150px">
        </div>

        <!-- Menu -->
        <ul class="nav-links">
            <li><a href="#">Beranda</a></li>
            <li><a href="#product">Game</a></li>
            <li><a href="#ewallet">E-Wallet</a></li>
            <li><a href="#pulsa">Pulsa</a></li>
            <li><a href="#voucher">Voucher</a></li>
        </ul>

        <!-- Button -->
        <div class="auth-buttons">
            <a href="/" class="btn-light">Daftar</a>
            <a href="/login" class="btn-outline-light">Login</a>
        </div>

        <!-- Hamburger -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('image/mask.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/mask.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/mask.png')}}" class="d-block w-100" alt="...">
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><br><br>
    
    {{-- <div class="promo">
        <div class="container p-3">
            <h2>Promo Terus</h2>
        </div>
        <div class="container pt-2 d-flex align-items-start">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/mobilelegends"><img src="{{ asset('image/mobilelegends.jpg')}}" class="rounded"></a><br>
                            <h3>Mobile Legends</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/freefire"><img src="{{ asset('image/freefire.jpg')}}" class="rounded"></a><br>
                            <h3>Free Fire</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/coc"><img src="{{ asset('image/coc.jpg')}}"  class="rounded"></a><br>
                            <h3>Clash Of Clans</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pubg.jpg')}}"  class="rounded"></a><br>
                            <h3>PUBG Mobile</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pb.png')}}"  class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/hok.jpg')}}"  class="rounded"></a><br>
                            <h3>Honor Of Kings</h3>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div><br><br> --}}

    <div id="product">
        <div class="container pt-3">
            <h2>Game</h2>
        </div>
        <div class="container pt-2 d-flex align-items-center">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/mobilelegends"><img src="{{ asset('image/mobilelegends.jpg')}}" class="rounded"></a><br>
                            <h3>Mobile Legends</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/freefire"><img src="{{ asset('image/freefire.jpg')}}" class="rounded"></a><br>
                            <h3>Free Fire</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/coc"><img src="{{ asset('image/coc.jpg')}}"  class="rounded"></a><br>
                            <h3>Clash Of Clans</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pubg.jpg')}}"  class="rounded"></a><br>
                            <h3>PUBG Mobile</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pointblank"><img src="{{ asset('image/pb.png')}}"  class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/hok.jpg')}}"  class="rounded"></a><br>
                            <h3>Honor Of Kings</h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="row pt-3">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/mobilelegends"><img src="{{ asset('image/mobilelegends.jpg')}}" class="rounded"></a><br>
                            <h3>Mobile Legends</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/freefire"><img src="{{ asset('image/freefire.jpg')}}" class="rounded"></a><br>
                            <h3>Free Fire</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/coc"><img src="{{ asset('image/coc.jpg')}}"  class="rounded"></a><br>
                            <h3>Clash Of Clans</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pubg.jpg')}}"  class="rounded"></a><br>
                            <h3>PUBG Mobile</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pb.png')}}"  class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/hok.jpg')}}"  class="rounded"></a><br>
                            <h3>Honor Of Kings</h3>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/mobilelegends"><img src="{{ asset('image/mobilelegends.jpg')}}" class="rounded"></a><br>
                            <h3>Mobile Legends</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/freefire"><img src="{{ asset('image/freefire.jpg')}}" class="rounded"></a><br>
                            <h3>Free Fire</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/coc"><img src="{{ asset('image/coc.jpg')}}"  class="rounded"></a><br>
                            <h3>Clash Of Clans</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pubg.jpg')}}"  class="rounded"></a><br>
                            <h3>PUBG Mobile</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pb.png')}}"  class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/hok.jpg')}}"  class="rounded"></a><br>
                            <h3>Honor Of Kings</h3>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/mobilelegends"><img src="{{ asset('image/mobilelegends.jpg')}}" class="rounded"></a><br>
                            <h3>Mobile Legends</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/freefire"><img src="{{ asset('image/freefire.jpg')}}" class="rounded"></a><br>
                            <h3>Free Fire</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/coc"><img src="{{ asset('image/coc.jpg')}}"  class="rounded"></a><br>
                            <h3>Clash Of Clans</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pubg.jpg')}}"  class="rounded"></a><br>
                            <h3>PUBG Mobile</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pb.png')}}"  class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/hok.jpg')}}"  class="rounded"></a><br>
                            <h3>Honor Of Kings</h3>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div><br><br>

    <div id="ewallet">
        <div class="container p-3">
            <h2>E-Wallet</h2>
        </div>
        <div class="container pt-2 d-flex align-items-start">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/dana"><img src="{{ asset('image/dana.jpg')}}" class="rounded"></a><br>
                            <h3>Dana</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/ovo"><img src="{{ asset('image/ovo.jpg')}}"  class="rounded"></a><br>
                            <h3>OVO</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/shopeepay"><img src="{{ asset('image/shopee.png')}}"  class="rounded"></a><br>
                            <h3>ShopeePay</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/gopay"><img src="{{ asset('image/gopay.jpg')}}"  class="rounded"></a><br>
                            <h3>Gopay</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>

    <div id="pulsa">
        <div class="container p-3">
            <h2>Pulsa</h2>
        </div>
        <div class="container pt-2 d-flex align-items-start">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/xl"><img src="{{ asset('image/xl.jpg')}}" class="rounded"></a><br>
                            <h3>XL Axiata</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/axis"><img src="{{ asset('image/axis.jpg')}}" class="rounded"></a><br>
                            <h3>Axis</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/telkomsel"><img src="{{ asset('image/telkomsel.jpg')}}"  class="rounded"></a><br>
                            <h3>Telkomsel</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/im3"><img src="{{ asset('image/im3.jpg')}}"  class="rounded"></a><br>
                            <h3>IM3 Ooredoo</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/three"><img src="{{ asset('image/tri.jpg')}}"  class="rounded"></a><br>
                            <h3>Three</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/byu"><img src="{{ asset('image/byu.jpg')}}"  class="rounded"></a><br>
                            <h3>by.U</h3>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/smartfren"><img src="{{ asset('image/smartfren.jpg')}}" class="rounded"></a><br>
                            <h3>Smartfren</h3>
                        </div>
                    </div>
                    {{-- <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/freefire"><img src="{{ asset('image/freefire.jpg')}}" class="rounded"></a><br>
                            <h3>Free Fire</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/coc"><img src="{{ asset('image/coc.jpg')}}"  class="rounded"></a><br>
                            <h3>Clash Of Clans</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pubg.jpg')}}"  class="rounded"></a><br>
                            <h3>PUBG Mobile</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pb.png')}}"  class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/hok.jpg')}}"  class="rounded"></a><br>
                            <h3>Honor Of Kings</h3>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div><br><br>
    
    <div id="voucher">
        <div class="container pt-3">
            <h2>Voucher</h2>
        </div>
        <div class="container pt-2 d-flex align-items-center">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pln"><img src="{{ asset('image/pln.png')}}" class="rounded"></a><br>
                            <h3>Token PLN</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pointblank"><img src="{{ asset('image/pb.png')}}" class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    {{-- <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/coc"><img src="{{ asset('image/coc.jpg')}}"  class="rounded"></a><br>
                            <h3>Clash Of Clans</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pubg.jpg')}}"  class="rounded"></a><br>
                            <h3>PUBG Mobile</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pb.png')}}"  class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/hok.jpg')}}"  class="rounded"></a><br>
                            <h3>Honor Of Kings</h3>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/mobilelegends"><img src="{{ asset('image/mobilelegends.jpg')}}" class="rounded"></a><br>
                            <h3>Mobile Legends</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/freefire"><img src="{{ asset('image/freefire.jpg')}}" class="rounded"></a><br>
                            <h3>Free Fire</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/coc"><img src="{{ asset('image/coc.jpg')}}"  class="rounded"></a><br>
                            <h3>Clash Of Clans</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pubg.jpg')}}"  class="rounded"></a><br>
                            <h3>PUBG Mobile</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/pb.png')}}"  class="rounded"></a><br>
                            <h3>Point Blank</h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p-2">
                            <a href="/pubg"><img src="{{ asset('image/hok.jpg')}}"  class="rounded"></a><br>
                            <h3>Honor Of Kings</h3>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div><br><br>

    

    <div id="copyright">
        <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <img src="{{ asset('image/logo.png')}}" width="75%"><br><br>
                    <p>Menjual berbagai kebutuhan game kamu dan beberapa 
                        item lainnya seperti E-Wallet, Pulsa, dan Voucher. Aman, Mudah, Terpercaya.
                    </p>
                </div>
                <div class="footer-section">
                    <h3>Address</h3><br>
                    <p><a href="https://maps.app.goo.gl/UUi3DdpFDqHBuFKN6" target="_blank">Jl. Slamet Riyadi No.315 Rt 10 / Rw 05 Pucung Kidul, Kroya, Cilacap</a></p>
                    <p>Kode Pos 53282</p>
                </div>
                <div class="footer-section">
                    <h3>Contact Me</h3><br>
                    <a href="https://share.google/wo1MMkvYywGhL1rIp"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://wa.me/081770224419"><ion-icon name="logo-whatsapp"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>
        <div class="wrapper">
             @2025 <b>Dimi Store</b> Copyright
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>
</html>