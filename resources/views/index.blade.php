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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
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
                            <div class="notifications">
                                <i class="material-icons dp48">notifications</i>
                                <span class="badge">0</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bahasa">
                                <span class="material-icons languange">language</span>
                                <span class="lang">ENG</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pemadam-container">
            <div class="pemadam">
                <h4>Pemadam Kebakaran Kota</h4>
                <p>Jl. Letjen Sutoyo</p>
            </div>
        </div>

        <div class="feeds-news">
            <div class="row">
                <div class="col-6">
                    <div class="feeds">
                        <span class="material-icons list">list</span>
                    </div>
                    <span class="feeds-text">Feeds</span>
                </div>
                <div class="col-6">
                    <div class="news">
                        <span class="material-icons article">article</span>
                    </div>
                    <span class="news-text">News</span>
                </div>
            </div>
        </div>

        <div class="news-content-container">
            <h4>News</h4>
            <hr>
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
                    <a href="/report_fire">
                        <div class="notif">
                            <span class="material-icons campaign">campaign</span>
                        </div>
                    </a>
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

<script>
    AOS.init({
        duration: 1200,
    });
</script>