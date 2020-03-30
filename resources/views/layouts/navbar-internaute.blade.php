<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>L'agitélien</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="{{asset('view/css/normalize.css')}}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('view/css/main.css')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('view/css/bootstrap.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('view/css/animate.min.css')}}">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="{{asset('view/css/font-awesome.min.css')}}">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="{{asset('view/vendor/OwlCarousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('view/vendor/OwlCarousel/owl.theme.default.min.css')}}">
        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="{{asset('view/css/meanmenu.min.css')}}">
        <!-- Magnific CSS -->
         <!-- Main Menu CSS -->
        <link rel="stylesheet" href="{{asset('view/css/meanmenu.min.css')}}">
        <!-- Select2 CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('view/css/select2.min.css')}}">
        <!-- Magnific CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('view/css/magnific-popup.css')}}">
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="{{asset('view/css/hover-min.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('view/style.css')}}">
        <!-- For IE -->
        <link rel="stylesheet" type="text/css" href="{{asset('view/css/ie-only.css')}}" />
        <!-- Modernizr Js -->
        <script src="{{asset('view/js/modernizr-2.8.3.min.js')}}"></script>

        <link href="{{asset('toast/jquery.toast.min.css')}}" id="theme" rel="stylesheet" />

        <!-- Sweety -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </head>

    <body>

        <!-- <div id="preloader"></div> -->
        <!-- Preloader End Here -->
        <div id="wrapper">
            <!-- Header Area Start Here -->
            <header>
                <div id="header-layout2" class="header-style6">
                
                    <div class="main-menu-area bg-body" id="sticker">
                        <div class="container">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-lg-2 d-none d-lg-block">
                                    <div class="logo-area">
                                        <a href="{{route('accueil')}}" class="img-fluid">
                                            <img src="{{asset('view/img/logo-dark.png')}}" alt="logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-none d-lg-block position-static min-height-none">
                                    <div class="ne-main-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li class="btn">
                                                    <a href="{{route('accueil')}}">Acceuil</a>
                                                </li>
                                                <li>
                                                    <a href="#">Publications</a>
                                                    <ul class="ne-dropdown-menu">
                                                        <li>
                                                            <a href="{{route('list_articles')}}">Articles</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('list_interview')}}">Interview</a>
                                                        </li>
                                                     
                                                    </ul>
                                                </li>
                                               
                                                <li>
                                                    <a href="{{route('contact')}}">Contactez nous</a>
                                                </li>
                                                @guest
                                                <!-- <li>
                                                    <a href="{{route('register')}}">Inscription <i class="fa fa-user" aria-hidden="true"></i></a>
                                                </li> --> 

                                                <li>
                                                    <a href="{{route('register')}}" data-toggle="modal" data-target="#myModalRegister">Inscription  <i class="fa fa-user" aria-hidden="true"></i></a>
                                                </li>   

                                                <li>
                                                    <a href="{{route('login')}}" data-toggle="modal" data-target="#myModal">Connexion  <i class="fa fa-user" aria-hidden="true"></i></a>
                                                </li>  

                                                <!-- 
                                                <li>
                                                    <a href="{{route('login')}}">Connexion</a>
                                                </li> -->

                                                @else 

                                                 <li>
                                                    <a href="#"> Me déconnecter ?</a>
                                                    <ul class="ne-dropdown-menu">
                                                        <li>
                                                            <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                     Déconnexion
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                            @endguest
                                                        </li>
                                                    </ul>

                                                </li>



                                               
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Formulaire de recherche -->
                                <div class="col-lg-2 col-md-12 text-right position-static">
                                    <div class="header-action-item on-mobile-fixed">
                                        <ul>
                                            <li>
                                                <form id="top-search-form" method="GET" action="{{route('search')}}" class="header-search-light">
                                                    <div class="input-group stylish-input-group ">
                                                        <input type="text" name="search" placeholder="Rechercher" class="form-controls">
                                                        <span class="input-group-addon btn-danger">
                                                            <button type="submit">
                                                                <i class="fa fa-search" aria-hidden="true"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <!-- <button class="search-button" type="submit">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </button> -->
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Formulaire de recherche -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
 

            <section class="bg-accent border-bottom add-top-margin">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                            <div class="topic-box mt-4 mb-5">Flash Info</div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8 col-7">
                            <div class="feeding-text-dark">
                                <ol id="sample" class="ticker">
                                   @foreach($flash as $flashy)
                                    <li>
                                        <a href="#">{{$flashy->flashinfo}}</a>
                                    </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


              <section class="bg-body">
                <div class="container">
                    <ul class="news-info-list text-center--md">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>Abidjan</li>
                        <li>                                
                            <i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"></span> 
                       
                        </li>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>Dernière mise à jour 
                            {{NOW()->format('h:i')}}
                        </li>

                        <li>
                            @if(session()->has('login'))
                                <strong class="text-danger">{{ session()->get('login') }}</strong>
                            @endif 
                        </li>
                        
                    </ul>
                </div>
            </section>


 @yield('content')
<!--  -->
<!--  -->


   <!-- Footer Area Start Here -->
            <footer class="bg-accent">
                
                <div class="footer-area-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="{{ route('accueil') }}" class="bg-dark footer-logo img-fluid">
                                    <img src="{{asset('view/img/logo.png')}}" alt="logo" class="img-fluid">
                                </a>
                                <p>© 2020 <b id="color">L'agitélien</b>. Tous droit réservés Par <a id="color" href="https://yvesboah.netlify.com/"><b>Yves Boah</b></a></p>
                                <style>
                                    #color{
                                        color: red;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->

            <!-- Modal Start Login -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="title-login-form">Connexion</div>
                        </div>
                        <div class="modal-body">
                            <div class="login-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <label>Addresse mail *</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Addresse mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>L'identifiant ou le mot de passe est incorrect.</strong>
                                        </span>
                                        @enderror
                                    <label>Mot de passe *</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    <div class="checkbox checkbox-primary">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked>

                                        <label for="checkbox">Se souvenir de moi</label>
                                    </div>
                                    <button type="submit" value="Login">Connexion</button>
                                    <button class="form-cancel" data-toggle="modal" data-target="#myModal" value="">Abandonner</button>

                                   <!--  Rappel de mot de passe - After -->

                                   <!--  @if (Route::has('password.request'))
                                    <label class="lost-password">
                                        <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                                    </label>
                                    @endif -->
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal End Login-->

             <!-- Modal Start Register -->
            <div class="modal fade" id="myModalRegister" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="title-login-form">Inscription</div>
                        </div>
                        <div class="modal-body">
                            <div class="login-form">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <label>Nom *</label>
                                     <input id="name" placeholder="Votre nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <label>Addresse mail *</label>
                                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Addresse mail" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                     <label>Mot de passe *</label>
                                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Mot de passe non identique</strong>
                                        </span>
                                    @enderror

                                     <label>Confirmez votre mot de passe *</label>
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation du mot de passe" required autocomplete="new-password">
                                    
                                    <label>Genre *</label>

                                    <div class="ne-custom-select">
                                        <select id="ne-month" name="sex" class='select2' required>
                                            <option value="">Choisir</option>
                                            <option value="M">Homme</option>
                                            <option value="F">Femme</option>
                                        </select>
                                    </div>
                                        @error('sex')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
    
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox" type="checkbox" checked>
                                        <label for="checkbox">Se souvenir de moi</label>
                                    </div>
                                    <button type="submit" value="Login">Inscription</button>
                                    <button class="form-cancel" data-toggle="modal" data-target="#myModalRegister" value="">Abandonner</button>
                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal End Register-->
            











<!--  -->
<!--  -->


            
        </div>
        <!-- jquery-->
        <script src="{{asset('view/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
        <!-- Plugins js -->
        <script src="{{asset('view/js/plugins.js')}}" type="text/javascript"></script>
        <!-- Popper js -->
        <script src="{{asset('view/js/popper.js')}}" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="{{asset('view/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- WOW JS -->
        <script src="{{asset('view/js/wow.min.js')}}"></script>
        <!-- Owl Cauosel JS -->
        <script src="{{asset('view/vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
        <!-- Meanmenu Js -->
        <script src="{{asset('view/js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
        <!-- Srollup js -->
        <script src="{{asset('view/js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
        <!-- jquery.counterup js -->
        <script src="{{asset('view/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('view/js/waypoints.min.js')}}"></script>
        <!-- Select2 Js -->
        <script src="{{asset('view/js/select2.min.js')}}" type="text/javascript"></script>
        <!-- Isotope js -->
        <script src="{{asset('view/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('view/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Ticker Js -->
        <script src="{{asset('view/js/ticker.js')}}" type="text/javascript"></script>
        <!-- Custom Js -->
        <script src="{{asset('view/js/main.js')}}" type="text/javascript"></script>
        <!-- Toast -->
        <script src="{{asset('toast/jquery.toast.min.js')}}"></script>

    

<script>
    // Surchagement de script
        // Newsletter
        $('#Newsletter').submit(function (e) {
                var email = document.getElementById('email');
                
            if(!email.value) {
                $.toast({
                    heading: 'Mail incorrect ou vide ',
                    text: 'veuillez réessayer svp !',
                    showHideTransition: 'fade',
                    icon: 'warning'
                })
                // console.log(e)
                e.preventDefault()
            } else {

                $.ajax({
                    url: '/api/Newsletter',
                    method: "POST",
                    data: $(this).serialize(),
                    datatype: 'json'
                })
                e.preventDefault()
                $(this).get(0).reset()
                $.toast({
                    heading: 'Abonnement réussie',
                    text: 'Votre Email à bien été Enregistré.',
                    showHideTransition: 'slide',
                    icon: 'success'
                })
            }
        })

        // Surchage de script
        // Newsletter
</script>

<script>
    // Surchagement de script
        // Message
        $('#Message').submit(function (e) {
                var nom = document.getElementById('nom');
                var content = document.getElementById('content');
                var email = document.getElementById('email');
                
            if(!email.value || !content.value || !nom.value)
            //if(1 ==2)
            {
                $.toast({
                    heading: 'Formulaire incomplet ',
                    text: 'veuillez réessayer svp !',
                    showHideTransition: 'fade',
                    icon: 'warning'
                })
                // console.log(e)
                e.preventDefault()
            } else {

                $.ajax({
                    url: '/api/contact',
                    method: "POST",
                    data: $(this).serialize(),
                    datatype: 'json'
                })
                e.preventDefault()
                $(this).get(0).reset()
                $.toast({
                    heading: 'Success',
                    text: 'Votre Message a bien été Envoyé.',
                    showHideTransition: 'slide',
                    icon: 'success'
                })
            }
        })

        // Surchage de script
        // Message
</script>

    </body>

</html>
