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
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    @laravelPWA
</head>
<body>
    <section>
        <div class="image-thumb">
            <img src="{{asset('images/front-img.png')}}" alt="">
        </div>

        <div class="text-heading">
            <h2>DAFTAR UNTUK MEMBANTU<br> SESAMA</h2>
            <p>
                FiRe membantu untuk melaporkan kebakaran<br>
                lebih cepat dan akurat. <br>   
                Apalagi yang anda tunggu? <br>
                Daftar sekarang!
            </p>
        </div>

        <div class="button">
            <a href="/register">
                <button class="btn register">Daftar</button>
            </a>
            <a href="/signin">
                <button class="btn signin">Masuk</button>
            </a>
        </div>
    </section>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/sweetalert2/sweetalert2.min.js')}}"></script>
</body>
</html>