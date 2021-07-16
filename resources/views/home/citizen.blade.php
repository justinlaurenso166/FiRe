<header><script src="{{asset('js/sweetalert2/sweetalert2.min.js')}}"></script></header>
@if (session('username') == "")
    <script>
        Swal.fire({
            icon: 'error',
            text: 'Harap masuk terlebih dahulu !',
            confirmButtonText: 'Masuk',
            showDenyButton: true,
            denyButtonText: 'Daftar',
        }).then((result)=>{
            if(result.isConfirmed){
                window.location.href = "/signin";
            }
            else{
                window.location.href = "/register";
            }
        });
    </script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/citizen.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    @laravelPWA
</head>
<body>
    <div class="container-fluid">
        <div class="heading">
            <div class="row">
                <div class="col-4 col-xl-2">
                    <h2>FiRe</h2>
                </div>
                <div class="col-4 col-xl-8"></div>
                <div class="col-4 col-xl-2">
                    <div class="row">
                        <div class="col-6">
                            <div class="histories">
                                <span class="material-icons history">
                                    history
                                </span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="notifications">
                                <i class="material-icons dp48">notifications</i>
                                <span class="badge">0</span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="pemadam-container">
            <div class="pemadam">
                <div class="row">
                    <div class="col-9">
                        <h4>{{session("name")}}</h4>
                        <span>{{session("address")}}</span>
                        <h4 class="donation-pocket">Dompet Donasi :  </h4>
                        <span>Rp. 100.000</span>
                    </div>
                    <div class="col-3">
                        <div class="level">
                            <span><i class="fa fa-user" aria-hidden="true" style="font-size: 40px"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="report-container">
            <div class="report">
                <a href="/report_fire">
                    <span class="material-icons campaign">campaign</span>
                </a>
            </div>
                <h2 class="report-text">LAPOR</h2>
        </div>

        <div class="feeds-news">
            <div class="row">
                <div class="col-3">
                    <a href="/feeds">
                        <div class="feeds">
                            <span class="material-icons list">list</span>
                        </div>
                    </a>
                    <span class="feeds-text">Postingan</span>
                </div>
                <div class="col-3">
                    <a href="/donation">
                        <div class="donation">
                            <span class="rupiah">Rp</span>
                        </div>
                    </a>
                    <span class="donation-text">Donasi</span>
                </div>
                <div class="col-3">
                    <a href="/news">
                        <div class="news">
                            <span class="material-icons article">article</span>
                        </div>
                    </a>
                    <span class="news-text">Berita</span>
                </div>
                <div class="col-3">
                    <div class="alert">
                        <span class="material-icons">priority_high</span>
                    </div>
                    <span class="news-text">Peringatan</span>
                </div>
            </div>
        </div>

        <div class="fire-fighter-list">
            <a href="/daftar-pemadam">
                <button class="fire-fighter">
                    Daftar Pemadam Kebakaran
                </button>
            </a>
        </div>

        <div class="footer">
            <div class="row">
                <div class="col-4">
                    <a href="/home/citizen">
                        <span class="material-icons home active">home</span>
                    </a>
                </div>
                <div class="col-4">
                    <span class="material-icons quiz">quiz</span>
                </div>
                <div class="col-4">
                    <a href="/profile">
                        <span class="material-icons account_circle">account_circle</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
</body>
</html>