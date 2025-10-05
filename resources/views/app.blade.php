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
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>

<body>

    <div class="container mt-5 bg-white border-rounded overflow-hidden" style="padding-left: 0px !important; padding-right: 0px !important">
        {{-- <div class="form-box active" id="login-form">
            <form action="">
                <input type="username" name="username" placeholder="Username" required><hr>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
        </div>  
        
            <p>Belum punya akun? <a href="#">Daftar</a></p> --}}
        
        <div class="row" style="padding:0px !important; margin:0px !important">
            <div class="col-6 d-flex align-items:center" style="padding:0px !important; margin:0px !important">                
                <img src="{{ asset('image/banner1.png')}}" width="100%" alt="poppins">
            </div>
            <div class="col-6 p-3">
                        <form action="{{ route("send_register")}}" method="POST">
                            @method("POST")
                            @csrf
                        <h2>Daftar</h2>
                        <h4><span>Username</span></h4>
                        <input type="username" name="username" placeholder="Masukkan Username" required>
                        <h4><span>Email</span></h4>
                        <input type="email" name="email" placeholder="Masukkan Email" required>
                        <h4><span>Password</span></h4>
                        <input type="password" name="password" placeholder="Masukkan Password" required>
                        <h4><span>Konfirmasi</span></h4>
                        <input type="password" name="confirmasi_password" placeholder="Konfirmasi Password" required>
                        {{-- <div class="d-flex justify-content-start gap-2">
                            <input type="checkbox" name="I Agree" style="width:unset !important; margin-bottom:unset !important" id="">
                            <label for="">I Agree</label>
                        </div> --}}
                        <button type="submit" name="daftar">Daftar</button>
        
                        </form>
            </div>
        </div>
        
        <p>Sudah punya akun? <a href="/login">Login</a></p>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>
</html>