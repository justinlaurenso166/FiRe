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

        <section class="sub-heading">
            <div class="row">
                <div class="col-2">
                    <a href="/donation">
                        <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                    </a>
                </div>
                <div class="col-10">
                    <h4>Donasi</h4>
                    <hr>
                </div>
            </div>
        </section>

        <section class="content-container">
            <div class="profile">
                <div class="thumbnail">
                    <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%" class="img-thumb">
                </div>
                <h4>Panca Bhakti</h4>
                <span class="alamat">Jl. Letjen Suprapto No. 30</span>
                <div class="bintang">
                    <i class="material-icons star">star</i>
                    <i class="material-icons star">star</i>
                    <i class="material-icons star">star</i>
                    <i class="material-icons star">star</i>
                    <i class="material-icons star_half">star_half</i>
                </div>
            </div>
        </section>

        <section class="nominal-container">
            <h4>Pilih Nominal : </h4>
            <div class="row">
                <div class="col-4">
                    <button class="btn">
                        Rp <span>10.000</span>
                    </button>
                </div>
                <div class="col-4">
                    <a href="/confirm">
                        <button class="btn">
                            Rp <span>20.000</span>
                        </button>
                    </a>
                </div>
                <div class="col-4">
                    <button class="btn">
                        Rp <span>30.000</span>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <button class="btn">
                        Rp <span>50.000</span>
                    </button>
                </div>
                <div class="col-4">
                    <button class="btn">
                        Rp <span>80.000</span>
                    </button>
                </div>
                <div class="col-4">
                    <button class="btn">
                        Rp <span>100.000</span>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <button class="btn">
                        Rp <span>200.000</span>
                    </button>
                </div>
                <div class="col-4">
                    <button class="btn plus" data-toggle="modal" data-target="#customNominal">
                        +
                    </button>
                </div>
                <div class="col-4">
                </div>
            </div>
        </section>

            <div class="modal" id="customNominal">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <div class="modal-body">
                        <div class="form-group">
                            <div>Masukkan nominal yang ingin kamu donasikan</div>
                            <input type="text" class="form-control" id="cust-nominal" name="cust-nominal">    
                        </div>             
                        <div class="ok-btn">
                            <button class="btn">OK</button>
                        </div>        
                    </div>         
                </div>
                </div>
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