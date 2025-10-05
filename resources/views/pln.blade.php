<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top Up Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
        
        .text-mute {
          color: white;
        }
        
    .section-box {
      background-color: #37353E;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      border: 1px solid #00FFE8;
      color: #ffffff;
    }

    .section-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
      color: #ffffff;
    }

    .section-title span {
      background: #00FFE8;
      color: #37353E;
      font-weight: bold;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem "Alan Sans", sans-serif;
    }

    .produk-card {
      background-color: #ffffff;
      border-radius: 10px;
      border: 2px solid #e0e0e0;
      padding: 15px;
      cursor: pointer;
      transition: 0.2s;
    }

    .produk-card:hover {
      transform: translateY(-3px);
      border-color: #00FFE8;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .produk-card.active {
      border: 2px solid #0d6efd;
      background-color: #f0f8ff;
    }

    .produk-title {
      font-size: 1rem;
      font-weight: bold;
      margin-bottom: 5px;
      color: #37353E;
    }

    .produk-price {
      color: #cb0000;
      font-weight: bold;
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
      
        .btn-cyan {
          background-color: #00fff7;   /* warna cyan */
          color: #37353E;                 /* teks hitam biar kontras */
          font-weight: bold;
          border: 2px solid #00fff7;
          transition: all 0.3s ease;
        }

        .btn-cyan:hover {
          background-color: transparent; /* jadi transparan saat hover */
          color: #00fff7;                 /* teks berubah cyan */
          border: 2px solid #00fff7;      /* outline cyan */
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
          <li><a href="/produk">Beranda</a></li>
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

  <div class="container py-5">
    <div class="row g-4">
      
      <!-- KIRI -->
      <div class="col-md-4">
        <div class="section-box text-center">
          <img src="{{ asset('image/pln.png')}}" alt="PLN" class="img-fluid rounded shadow mb-3">
          <h3 class="fw-bold">Token PLN</h3>
          <p class="text-white">Isi Token Listrik PLN dengan cepat, mudah, dan aman.</p>
          <hr>
          <h5 class="fw-bold">Cara Top Up:</h5>
          <ol class="text-start">
            <li>Masukkan Nomor Meteran</li>
            <li>Pilih jumlah produk</li>
            <li>Pilih metode pembayaran</li>
            <li>Masukkan kontak Anda</li>
            <li>Selesaikan pembayaran</li>
          </ol>
          {{-- <hr>
          <h5 class="fw-bold">Tentang Game:</h5>
          <p class="text-white">Mobile Legends adalah game MOBA populer di smartphone dengan jutaan pemain aktif di seluruh dunia. Nikmati pengalaman bermain yang seru bersama teman Anda!</p> --}}
        </div>
      </div>

      <!-- KANAN -->
      <div class="col-md-8">
        <div class="section-box">
          <div class="section-title"><span>1</span> Masukkan Nomor</div>
          <form>
            <div class="mb-3">
              <label for="userid" class="form-label">Nomor Meteran</label>
              <input type="text" class="form-control" id="nomortelepon" placeholder="123456789" required>
            </div>
          </form>
        </div>

        <div class="section-box">
          <div class="section-title"><span>2</span> Pilih Jumlah Nominal</div>
          <div class="row g-3">
            <div class="col-md-3">
              <div class="produk-card">
                <div class="produk-title">20.000</div>
                <div class="produk-price">IDR 21.000</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="produk-card">
                <div class="produk-title">50000</div>
                <div class="produk-price">IDR 51.000</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="produk-card">
                <div class="produk-title">100.000</div>
                <div class="produk-price">IDR 101.000</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="produk-card">
                <div class="produk-title">200.000</div>
                <div class="produk-price">IDR 201.000</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="produk-card">
                <div class="produk-title">1.000.000</div>
                <div class="produk-price">IDR 1.001.000</div>
              </div>
            </div>
          </div>
        </div>

        <div class="section-box">
          <div class="section-title"><span>3</span> Metode Pembayaran</div>
          <select class="form-select">
            <option>Pilih metode pembayaran</option>
            <option>OVO</option>
            <option>DANA</option>
            <option>GoPay</option>
            <option>Transfer Bank</option>
          </select>
        </div>

        <!-- Step 4 -->
        <div class="section-box">
          <div class="section-title"><span>4</span> Informasi Kontak</div>
          <div class="mb-3">
            <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
            <input type="text" class="form-control" id="whatsapp" placeholder="Contoh: 08123456789">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" placeholder="Contoh: email@gmail.com">
          </div>
        </div>

        <!-- Button -->
        <button class="btn btn-cyan w-100">Lanjutkan Pembayaran</button>

      </div>
    </div>
  </div>

  <script>
    // Klik produk aktif
    document.querySelectorAll('.produk-card').forEach(card => {
      card.addEventListener('click', () => {
        document.querySelectorAll('.produk-card').forEach(c => c.classList.remove('active'));
        card.classList.add('active');
      });
    });
  </script>
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
