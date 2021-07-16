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
    <link rel="stylesheet" href="{{asset('css/donation.css')}}">
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

        <section class="confirm-container">
            <h3>Apalah Anda Yakin ?</h3>
            <div class="detail">
                <div class="row">
                    <div class="col-4">
                        Nominal :
                    </div>
                    <div class="col-8">
                        Rp. 20.000
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Dari :
                    </div>
                    <div class="col-8">
                        Kelly Kirsten Audrey
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Untuk :
                    </div>
                    <div class="col-8">
                        Panca Bhakti
                    </div>
                </div>
            </div>
            <div class="confirm-btn">
                <div class="row">
                    <div class="col-6">
                        <div class="kembali">
                            <a href="/donation-detail">
                                <button class="btn">Kembali</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="donasi-btn">
                            <a href="/pilih-dompet">
                                <button class="btn">Donasi</button>
                            </a>
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