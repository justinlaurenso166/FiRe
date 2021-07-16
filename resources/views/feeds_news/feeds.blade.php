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
    <link rel="stylesheet" href="{{asset('css/feeds.css')}}">
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
                    <h4>Postingan</h4>
                    <hr>
                </div>
            </div>
        </section>

        <section class="content-container">
            <div class="input-form">
                <div class="form-group">
                    {{-- <span class="material-icons search">search</span> --}}
                    <input type="text" class="form-control" id="search" name="search" placeholder="Contoh : Pemadam, Nama Pemadam">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button class="btn general-feeds activated">Beranda Umum</button>
                </div>
            </div>
            <div class="row button2">
                <div class="col-6">
                    <div class="btn-event">
                        <div class="btn events">
                            <div class="icon" style="margin-left: -50px">
                                <span class="material-icons event_available" style="padding-top:5px">event_available</span>
                            </div>
                            <span style="position: absolute; margin-top:6px">Acara</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="btn-education">
                        <div class="btn education">
                            <div class="icon" style="margin-left: -50px">
                                <span class="material-icons feed" style="padding-top: 5px">feed</span>
                            </div>
                            <span style="position: absolute; margin-top:5px">Edukasi</span>
                        </div>
                    </div>
                </div>
            </div>

            
        </section>
        <div class="news-content-container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%" class="img-thumb">
                    </div>
                    <div class="desc">
                        <h5>Api Berhasil Dipadamkan!</h5>
                        <p>
                            PT Pertamina (Persero) menjelaskan terkait persoalan terbakar-nya kilang minyak di Balongan, Indramayu,Jawa Barat.
                        </p>
                        <a href="">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%" class="img-thumb">
                    </div>
                    <div class="desc">
                        <h5>Api Berhasil Dipadamkan!</h5>
                        <p>
                            PT Pertamina (Persero) menjelaskan terkait persoalan terbakar-nya kilang minyak di Balongan, Indramayu,Jawa Barat.
                        </p>
                        <a href="">See More</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%" class="img-thumb">
                    </div>
                    <div class="desc">
                        <h5>Api Berhasil Dipadamkan!</h5>
                        <p>
                            PT Pertamina (Persero) menjelaskan terkait persoalan terbakar-nya kilang minyak di Balongan, Indramayu,Jawa Barat.
                        </p>
                        <a href="">See More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="row">
                <div class="col-4">
                    <a href="/">
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