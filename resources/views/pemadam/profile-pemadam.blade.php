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
    <link rel="stylesheet" href="{{asset('css/daftar-pemadam.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
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

        <section class="sub-heading">
            <div class="row">
                <div class="col-2">
                    <a href="/daftar-pemadam">
                        <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                    </a>
                </div>
                <div class="col-10">
                    <h4>Panca Bhakti</h4>
                    <hr>
                </div>
            </div>
        </section>

        <section class="profile-pemadam-container">
            <div class="img-profile">
                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
            </div>
            <div class="profile">
                <div class="row">
                    <div class="col-7">
                        <h4>Panca Bhakti</h4>
                        <span class="alamat">Jl. Letjen Suprapto No. 30</span>
                    </div>
                    <div class="col-5">
                        <div class="bintang">
                            <i class="material-icons star">star</i>
                            <i class="material-icons star">star</i>
                            <i class="material-icons star">star</i>
                            <i class="material-icons star">star</i>
                            <i class="material-icons star_half">star_half</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="no-hp">
                <p>
                    <span class="material-icons phone">phone</span>
                    <span class="telp">(0561) 736344</span>
                </p>
            </div>

            <div class="description">
                <p>
                    Panca Bhakti adalah yayasan Pemadam Kebakaran yang
                    berlokasi di Pontianak, tepatnya di jalan Letjend Suprapto nomor 30.  Kami akan menolong korban Kebakaran tanpa pamrih.
                </p>
            </div>

            <div class="foto-container">
                <h4>Foto</h4>
                <hr>

                <div class="foto-grid">
                    <div class="row">
                        <div class="col-4">
                            <div class="foto-box">
                                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="foto-box">
                                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="foto-box">
                                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="foto-box">
                                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="foto-box">
                                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="foto-box">
                                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="footer">
            <div class="row">
                <div class="col-4">
                    <a href="/home/citizen">
                        <span class="material-icons home">home</span>
                    </a>
                </div>
                <div class="col-4">
                    <span class="material-icons quiz">quiz</span>
                </div>
                <div class="col-4">
                    <span class="material-icons account_circle">account_circle</span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
</body>
</html>