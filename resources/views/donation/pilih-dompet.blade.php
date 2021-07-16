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
                    <a href="/confirm">
                        <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                    </a>
                </div>
                <div class="col-10">
                    <h4>Pilih Dompet</h4>
                    <hr style="width: 150px">
                </div>
            </div>
        </section>

        <section class="card-container">
            <a href="/success-donation">
                <div class="card-box">
                    <div class="row">
                        <div class="col-8">
                            <div class="circle"></div>
                            <div class="circle-transparent"></div>
                        </div>
                        <div class="col-4">
                            <h4>FiRe</h4>
                        </div>
                    </div>
                    <div class="row profile">
                        <div class="col-12">
                            <h5>Kelly Kirsten Audrey</h5>
                            <span class="card-number">1234 5678 1234 7890</span>
                            <br>
                            <span class="exp-date">
                                08/11
                            </span>
                        </div>
                    </div>
                </div>
            </a>

            <div class="card-box cell2">
                <div class="row">
                    <div class="col-8">
                        <div class="circle"></div>
                        <div class="circle-transparent"></div>
                    </div>
                    <div class="col-4">
                        <h4>Bank A</h4>
                    </div>
                </div>
                <div class="row profile">
                    <div class="col-12">
                        <h5>Kelly Kirsten Audrey</h5>
                        <span class="card-number">1234 5678 1234 7890</span>
                        <br>
                        <span class="exp-date">
                            08/11
                        </span>
                    </div>
                </div>
            </div>

            <div class="card-box cell3">
                <div class="row">
                    <div class="col-8">
                        <div class="circle"></div>
                        <div class="circle-transparent"></div>
                    </div>
                    <div class="col-4">
                        <h4>Bank B</h4>
                    </div>
                </div>
                <div class="row profile">
                    <div class="col-12">
                        <h5>Kelly Kirsten Audrey</h5>
                        <span class="card-number">1234 5678 1234 7890</span>
                        <br>
                        <span class="exp-date">
                            08/11
                        </span>
                    </div>
                </div>
            </div>
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