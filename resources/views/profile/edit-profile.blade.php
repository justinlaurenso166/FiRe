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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
                    <a href="/profile">
                        <span class="material-icons arrow_back_ios">arrow_back_ios</span>
                    </a>
                </div>
                <div class="col-10">
                    <h4>Profile</h4>
                    <hr>
                </div>
            </div>
        </section>

        <section class="content-container">
            <div class="img-profile">
                <img src="{{asset('images/maxresdefault.jpg')}}" alt="" width="100%">
                <input type="file" name="file" id="file" class="inputfile" />
                <label for="file"><span class="material-icons photo_camera">photo_camera</span></label>
            </div>

            <div class="form-edit">
                <fieldset>
                    <legend>Name</legend>
                    <input type="text" class="form-control" class="name" id="name" autocomplete="off" value="Kelly Kristen Audrey">
                </fieldset>

                <fieldset>
                    <legend>Address</legend>
                    <input type="text" class="form-control" class="address" id="address" autocomplete="off" value="Jl. Gajahmada No.9">
                </fieldset>

                <fieldset>
                    <legend>Phone Number</legend>
                    <input type="text" class="form-control" class="phone" id="phone" autocomplete="off" placeholder="Masukkan Nomor HP">
                </fieldset>

                <div class="change-pass">
                    <button class="change btn" id="change" data-target="#changePassword" data-toggle="modal">Change Password</button>
                </div>

                <div class="save-edit">
                    <button class="save btn" id="save">Save</button>
                </div>
            </div>
        </section>

        <div class="modal" id="changePassword">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <div class="modal-body">
                    <div class="input-form">

                        <div class="form-group">
                            <div>Your old password</div>
                            <input type="password" class="form-control" name="old_password" id="old_password" pattern=".{8,12}" required title="Harus 8-12 karakter">
                            <i class="bi bi-eye" id="togglePassword1"></i>
    
                            <div>Your new password</div>
                            <input type="password" class="form-control" name="new_password" id="new_password" pattern=".{8,12}" required title="Harus 8-12 karakter">
                            <i class="bi bi-eye" id="togglePassword2"></i>    
    
                            <div>Confirm new password</div>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" pattern=".{8,12}" required title="Harus 8-12 karakter">
                            <i class="bi bi-eye" id="togglePassword3"></i> 
                        </div>             
                        <div class="ok-btn">
                            <button class="btn">OK</button>
                        </div>        
                    </div>
                </div>         
            </div>
            </div>
        </div>

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

<script>
    const togglePassword1 = document.querySelector('#togglePassword1');
    const password1 = document.querySelector('#old_password');

    togglePassword1.addEventListener('click', function (e) {
        // toggle the type attribute
        const type1 = password1.getAttribute('type') === 'password' ? 'text' : 'password';
        password1.setAttribute('type', type1);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });   

    const togglePassword2 = document.querySelector('#togglePassword2');
    const password2 = document.querySelector('#new_password');

    togglePassword2.addEventListener('click', function (e) {
        // toggle the type attribute
        const type2 = password2.getAttribute('type') === 'password' ? 'text' : 'password';
        password2.setAttribute('type', type2);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });  

    const togglePassword3 = document.querySelector('#togglePassword3');
    const password3 = document.querySelector('#confirm_password');

    togglePassword3.addEventListener('click', function (e) {
        // toggle the type attribute
        const type3 = password3.getAttribute('type') === 'password' ? 'text' : 'password';
        password3.setAttribute('type', type3);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });  
</script>