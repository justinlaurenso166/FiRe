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
                    <a href="/home/citizen">
                        <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                    </a>
                </div>
                <div class="col-10">
                    <h4>Daftar Pemadam</h4>
                    <hr>
                </div>
            </div>
        </section>

        <section class="content-container">
            <h4>Cari Pemadam : </h4>
            <div class="input-form">
                <div class="form-group">
                    {{-- <span class="material-icons search">search</span> --}}
                    <input type="text" class="form-control" id="search" name="search" placeholder="Contoh : Panca Bhakti">
                </div>
            </div>
        </section>

        <section class="pemadam-container">
            <div class="row">
                <div class="col-12">
                    <a href="/profile-pemadam">
                        <div class="row line">
                            <div class="col-3">
                                <div class="thumbnail">
                                    <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="col-9">
                                <h5>Panca Bhakti</h5>
                                <span class="alamat">Jl. Sutoyo</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="garis"><hr></div>

            <div class="row">
                <div class="col-12">
                    <a href="/profile-pemadam">
                        <div class="row line">
                            <div class="col-3">
                                <div class="thumbnail">
                                    <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="col-9">
                                <h5>Panca Bhakti</h5>
                                <span class="alamat">Jl. Sutoyo</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="garis"><hr></div>

            <div class="row">
                <div class="col-12">
                    <a href="/profile-pemadam">
                        <div class="row line">
                            <div class="col-3">
                                <div class="thumbnail">
                                    <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="col-9">
                                <h5>Panca Bhakti</h5>
                                <span class="alamat">Jl. Sutoyo</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="garis"><hr></div>

            <div class="row">
                <div class="col-12">
                    <a href="/profile-pemadam">
                        <div class="row line">
                            <div class="col-3">
                                <div class="thumbnail">
                                    <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="col-9">
                                <h5>Panca Bhakti</h5>
                                <span class="alamat">Jl. Sutoyo</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="garis"><hr></div>
        </section>

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