<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/signin.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{asset('js/alertifyjs/css/alertify.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/alertifyjs/css/themes/semantic.min.css')}}">
    <script src="{{asset('js/alertifyjs/alertify.min.js')}}"></script>
    <script src="{{asset('js/sweetalert2/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

    @laravelPWA
</head>
<body>
    <?php
        if(session("user_notfound")){
            $msg = session("user_notfound");
            echo "<script type='text/javascript'>
                Swal.fire({
                    icon: 'error',
                    text: '$msg',
                    footer: '<a href=/register>Register</a>',
                });  
            </script>";
        }
        if(session("wrong_pass")){
            $msg = session("wrong_pass");
            echo "<script type='text/javascript'>
                Swal.fire({
                    icon: 'error',
                    text: '$msg',
                });  
            </script>";
        }
    ?>

    <section>
        <div class="row">
            <div class="col-2">
                <a href="/">
                    <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                </a>
            </div>
            <div class="col-10">
            </div>
        </div>

        <div class="heading">
            <h2>Masuk sekarang</h2>
            <p>Senang bertemu kembali,<br>Jadilah pahlawan sekarang</p>
        </div>

        <form action="/login" method="POST">
            @csrf
            <div class="input-form">
                <div class="form-group">
                    <input type="number" placeholder="Nomor Telepon" class="form-control" name="username" id="username" autocomplete="off" required>
                    <input type="password" placeholder="Password" class="form-control" name="password" id="password" pattern=".{8,12}" required title="Harus 8-12 karakter">
                    <i class="bi bi-eye" id="togglePassword"></i>
                </div>
            </div>
    
            <div class="sign-in">
                <span>Tidak punya akun ? <a href='/register'>Daftar</a></span>
                <div class="sign-in-btn">
                    <button class="btn" id="signin">Masuk</button>
                </div>
            </div>
        </form>
    </section>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    
</body>
</html>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
    this.classList.toggle('bi-eye-slash');
});
</script>