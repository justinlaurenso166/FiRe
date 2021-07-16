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
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
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
                    <h4>Profile</h4>
                    <hr style="width: 80px">
                </div>
            </div>
        </section>

        <section class="content-container">
            <div class="img-profile">
                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
            </div>

            <div class="profile-detail">
                <div class="row">
                    <div class="col-12">
                        <h4>Kelly Kristen Audrey</h4>
                        <span class="alamat">Jl. Gajahmada No. 9</span>
                    </div>
                </div>
            </div>

            <div class="three-btn">
                <div class="row">
                    <div class="col-12">
                        <a href="/edit-profile">
                            <button class="btn">Edit My Profile</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="/e-wallet">
                            <button class="btn">Go to E-Wallet</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="/address_list">
                            <button class="btn">My Address List</button>
                        </a>
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
                    <span class="material-icons account_circle active">account_circle</span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
</body>
</html>