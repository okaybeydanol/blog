<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Blog Yönetim Paneli - Giriş Ekranı</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('back') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back') }}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back') }}/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/assets/css/elements/alerts.css">
</head>

<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Giriş Yap</h1>
                        <p class="">Kullanıcı adı ve şifreyi yazıp girişe basın.</p>

                        @if ($errors->any())
                        <div class="alert alert-outline-danger mb-4" role="alert"> <button type="button" class="close"
                                data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-x close" data-dismiss="alert">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></button><i class="flaticon-cancel-12 close"
                                data-dismiss="alert"></i>{{ $errors->first() }} </div>

                        @endif
                        <form method="POST" action="{{ route('admin.login.post') }}" class="text-left">
                            @csrf
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">KULLANICI ADI</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="name" type="text" class="form-control"
                                        placeholder="gorkemdemir">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">ŞİFRE</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="Şifre">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Giriş</button>
                                    </div>
                                </div>

                                <div class="division">
                                    <span></span>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('back') }}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('back') }}/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('back') }}/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('back') }}/assets/js/authentication/form-2.js"></script>
    <script src="{{ asset('back') }}/plugins/highlight/highlight.pack.js"></script>

</body>

</html>
