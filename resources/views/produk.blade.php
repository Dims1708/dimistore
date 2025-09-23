<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
            background: #EEEEEE;
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
            background: #0D6EFD;
            z-index: 10;
            padding: 0px 30px;
        }

        nav ul {
            display: flex;
            gap: 30px;
            margin: 0px;
            align-content: center;
            list-style: none;
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
                background: #0D6EFD;
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

        .labelforsearch {
            cursor: text;
            background-color: #0D6EFD;
            padding:0px 25px;
            border-radius: 6px;
        }

        .searchIcon {
            width: 13px;
        }

        .border {
            height: 40%;
            width: 1.3px;
            background-color: rgb(223, 223, 223);
        }

        .searchIcon path {
            fill: white;
        }

        /* button {
            width: 50px;
            height: 30px;
            margin-top: 10px;
            margin-right: 6px;
            border-radius: 6px;
            padding: 0px;
        } */
        .btn1 {
            border: 1px solid white;
            background-color: white;
            color: #0D6EFD;
        }

        .btn2 {
            border: 1px solid white;
            background-color: transparent;
            color: white;
        }

        .btn1:hover {
            border: 1px solid #0D6EFD;
            background-color: white;
            text-decoration: underline #0D6EFD;
        }

        .btn2:hover { 
            border: 1px solid #0D6EFD;
        }

        .diskon {
            color: black;
        }

        .product {
            color: black;
        }

        .bg-custom {
            color: white;
            background-color: rgba(255, 255, 255, 0.187);
            font-size: 18px;
        }
        
        .beli {
            border: 1px solid #0D6EFD;
            background-color: #0D6EFD;
            color: white;
        }
        
        .beli:hover {
            border: 1px solid #0D6EFD;
            background-color: white;
            color: #0D6EFD;
        }

        .like {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: none;
            background-color: transparent;
            position: relative;

        }


        .like:hover > .icon {
            transform: scale(1.2);
            cursor: pointer;
            transition: .2s linear;
        }

        .like:focus > .icon {
            fill: #fd1853;
            animation: grosseur .2s linear;
        }

        @keyframes grosseur {
            0% {
            width: 50px;
            height: 50px;
            fill: #fd1853;
        }

        100% {
            width: 30px;
            height: 30px;
            fill: #fd1853;
        }
        }

        #copyright {
            text-align: center;
            width: 100%;
            padding: 50px 0px 50px 0px;
            margin-top: 50px;
            background-color: #0D6EFD;
        }

        .label-diskon {
            position: absolute;
            left: -10px;
            top: 30px;
            width: 80px;
        }

    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset('image/logo.png')}}" width="50px">
        </div>

        <!-- Menu -->
        <ul class="nav-links">
            <li>Home</li>
            <li>Discount</li>
            <li>Category</li>
        </ul>

        <!-- Button -->
        <div class="auth-buttons">
            <a href="/" class="btn btn-light">Daftar</a>
            <a href="/login" class="btn btn-outline-light">Login</a>
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
    
    <div class="diskon">
        <div class="container p-2">
            <h2>Diskon 12.12</h2>
        </div>
        <div class="container pt-5 d-flex align-items-start">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-2 position-relative"> 
                            <div class="btn btn-primary label-diskon">12.12</div>
                            <img src="{{ asset('image/mobilelegends.jpg')}}" class="rounded"><br>
                            <h3>Product</h3>
                            <h5>IDR 300.000</h5>
                            <div class="d-flex">
                                <button class="btn btn-primary">Beli</button>
                                <button class="btn">
                                    <svg class="icon" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-2 position-relative"> 
                            <div class="btn btn-primary label-diskon">12.12</div>
                            <img src="{{ asset('image/freefire.jpg')}}" class="rounded"><br>
                            <h3>Product</h3>
                            <h5>IDR 300.000</h5>
                            <div class="d-flex">
                                <button class="btn btn-primary">Beli</button>
                                <button class="btn">
                                    <svg class="icon" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-2 position-relative"> 
                            <div class="btn btn-primary label-diskon">12.12</div>
                            <img src="{{ asset('image/pubg.jpg')}}"  class="rounded"><br>
                            <h3>Product</h3>
                            <h5>IDR 300.000</h5>
                            <div class="d-flex">
                                <button class="btn btn-primary">Beli</button>
                                <button class="btn">
                                    <svg class="icon" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-2 position-relative"> 
                            <div class="btn btn-primary label-diskon">12.12</div>
                            <img src="{{ asset('image/coc.jpg')}}" class="rounded"><br>
                            <h3>Product</h3>
                            <h5>IDR 300.000</h5>
                            <div class="d-flex">
                                <button class="btn btn-primary">Beli</button>
                                <button class="btn">
                                    <svg class="icon" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="product">
        <div class="container pt-2">
            <h2>Product</h2>
        </div>
        <div class="container pt-5 d-flex align-items-center">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-2">
                            <img src="{{ asset('image/mobilelegends.jpg')}}" class="rounded"><br>
                            <h3>Product</h3>
                            <h5>IDR 300.000</h5>
                            <div class="d-flex">
                                <button class="btn btn-primary">Beli</button>
                                <button class="btn">
                                    <svg class="icon" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-2">
                            <img src="{{ asset('image/freefire.jpg')}}" class="rounded"><br>
                            <h3>Product</h3>
                            <h5>IDR 300.000</h5>
                            <div class="d-flex">
                                <button class="btn btn-primary">Beli</button>
                                <button class="btn">
                                    <svg class="icon" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-2">
                            <img src="{{ asset('image/coc.jpg')}}"  class="rounded"><br>
                            <h3>Product</h3>
                            <h5>IDR 300.000</h5>
                            <div class="d-flex">
                                <button class="btn btn-primary">Beli</button>
                                <button class="btn">
                                    <svg class="icon" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-2">
                            <img src="{{ asset('image/pubg.jpg')}}"  class="rounded"><br>
                            <h3>Product</h3>
                            <h5>IDR 300.000</h5>
                            <div class="d-flex">
                                <button class="btn btn-primary">Beli</button>
                                <button class="btn">
                                    <svg class="icon" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="footer-section">
                <h3>Sosial Media</h3><br>
                <p><b>Instagram</b></p>
                <p><b>Facebook</b></p>
                <p><b>Whatsapp</b></p><br>
        </div>
        <div class="wrapper">
             @2025 <b>Dimi Store</b> Copyright
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>
</html>