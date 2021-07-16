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
    <link rel="stylesheet" href="{{asset('css/e-wallet.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>

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
                    <a href="/profile">
                        <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                    </a>
                </div>
                <div class="col-10">
                    <h4>E-Wallet</h4>
                    <hr>
                </div>
            </div>
        </section>

        <section class="content-container">
            <div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true }'>
                <div class="gallery-cell cell1">
                    <div class="row">
                        <div class="col-9">
                            <div class="circle"></div>
                            <div class="circle-transparent"></div>
                        </div>
                        <div class="col-3">
                            <h4>FiRe</h4>
                        </div>
                    </div>
                    <div class="row profile">
                        <div class="col-7">
                            <h5>Kelly Kirsten Audrey</h5>
                            <span class="card-number">1234 5678 1234 7890</span>
                            <br>
                            <span class="exp-date">
                                08/11
                            </span>
                        </div>
                        <div class="col-5">
                            <h5 class="rupiah">Rp. <span class="nominal">2.000.000</span></h5>
                        </div>
                    </div>
                </div>
                <div class="gallery-cell cell2">
                    <div class="row">
                        <div class="col-9">
                            <div class="circle"></div>
                            <div class="circle-transparent"></div>
                        </div>
                        <div class="col-3">
                            <h4>FiRe</h4>
                        </div>
                    </div>
                    <div class="row profile">
                        <div class="col-7">
                            <h5>Kelly Kirsten Audrey</h5>
                            <span class="card-number">1234 5678 1234 7890</span>
                            <br>
                            <span class="exp-date">
                                08/11
                            </span>
                        </div>
                        <div class="col-5">
                            <h5 class="rupiah">Rp. <span class="nominal">10.000.000</span></h5>
                        </div>
                    </div>
                </div>
                <div class="gallery-cell cell3">
                    <div class="row">
                        <div class="col-9">
                            <div class="circle"></div>
                            <div class="circle-transparent"></div>
                        </div>
                        <div class="col-3">
                            <h4>FiRe</h4>
                        </div>
                    </div>
                    <div class="row profile">
                        <div class="col-7">
                            <h5>Kelly Kirsten Audrey</h5>
                            <span class="card-number">1234 5678 1234 7890</span>
                            <br>
                            <span class="exp-date">
                                08/11
                            </span>
                        </div>
                        <div class="col-5">
                            <h5 class="rupiah">Rp. <span class="nominal">1.000.000</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="content">
            <div class="add-card">
                <button class="btn" id="add-card">Tambah Kartu Kredit</button>
            </div>
            <div class="donate-now">
                <a href="/donation">
                    <button class="btn" id="donate-now">Donasi Sekarang</button>
                </a>
            </div>

            <div class="histori-donasi">
                <h4>Histori Donasi</h4>
                <hr>
                <div class="histori-list">
                    <div class="row">
                        <div class="col-8">
                            <span>Didonasikan ke : </span>
                            <h5>Panca Bhakti</h5>
                            <span class="tgl">
                                12-04-2021 / 16:30
                            </span>
                        </div>
                        <div class="col-4">
                            <span>Rp. <span>20.000</span></span>
                        </div>
                    </div>
                    <div class="garis"><hr></div>

                    <div class="row">
                        <div class="col-8">
                            <span>Didonasikan ke : </span>
                            <h5>Panca Bhakti</h5>
                            <span class="tgl">
                                12-04-2021 / 16:30
                            </span>
                        </div>
                        <div class="col-4">
                            <span>Rp. <span>20.000</span></span>
                        </div>
                    </div>
                    <div class="garis"><hr></div>

                    <div class="row">
                        <div class="col-8">
                            <span>Didonasikan ke : </span>
                            <h5>Panca Bhakti</h5>
                            <span class="tgl">
                                12-04-2021 / 16:30
                            </span>
                        </div>
                        <div class="col-4">
                            <span>Rp. <span>20.000</span></span>
                        </div>
                    </div>
                    <div class="garis"><hr></div>
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