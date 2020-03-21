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
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
        <link rel="stylesheet" type="text/css" href="{{asset('view/css/magnific-popup.css')}}">
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="{{asset('view/css/hover-min.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('view/style.css')}}">
        <!-- For IE -->
        <link rel="stylesheet" type="text/css" href="{{asset('view/css/ie-only.css')}}" />
        <!-- Modernizr Js -->
        <script src="{{asset('view/js/modernizr-2.8.3.min.js')}}"></script>
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
                                        <a href="index.html" class="img-fluid">
                                            <img src="view/img/logo-dark.png" alt="logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-none d-lg-block position-static min-height-none">
                                    <div class="ne-main-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li class="btn">
                                                    <a href="#">Acceuil</a>
                                                </li>
                                                <li>
                                                    <a href="#">rubrique</a>
                                                    <ul class="ne-dropdown-menu">
                                                        <li>
                                                            <a href="index.html">Portrait</a>
                                                        </li>
                                                        <li>
                                                            <a href="index2.html">A la decouverte</a>
                                                        </li>
                                                        <li>
                                                            <a href="index3.html">Reportage</a>
                                                        </li>
                                                        <li>
                                                            <a href="index4.html">Microtrotoire</a>
                                                        </li>
                                                        <li>
                                                            <a href="index5.html">A vous l'honneur</a>
                                                        </li>
                                                        <li>
                                                            <a href="index7.html">Afferage</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-news-4.html">Leçon de vie</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="single-news-3.html">Jeux et humours</a>
                                                </li>
                                                <li>
                                                    <a href="gallery-style-2.html">Anglais</a>
                                                </li>
                                                <li>
                                                    <a href="gallery-style-1.html">Le portail des entreprises</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 text-right position-static">
                                    <div class="header-action-item on-mobile-fixed">
                                        <ul>
                                            <li>
                                                <form id="top-search-form" class="header-search-light">
                                                    <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                                    <button class="search-button">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </li>
                                            <li class="d-none d-sm-block d-md-block d-lg-none">
                                                <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-user" aria-hidden="true"></i>Sign in
                                                </button>
                                            </li>
                                            <li>
                                                <div id="side-menu-trigger" class="offcanvas-menu-btn offcanvas-btn-repoint">
                                                    <a href="#" class="menu-bar">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </a>
                                                    <a href="#" class="menu-times close">
                                                        <span></span>
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                <a href="index.html" class="bg-dark footer-logo img-fluid">
                                    <img src="view/img/logo.png" alt="logo" class="img-fluid">
                                </a>
                                <p>© 2020 L'agitelien. Tous droit réservés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
            <!-- Modal Start-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="title-login-form">Login</div>
                        </div>
                        <div class="modal-body">
                            <div class="login-form">
                                <form>
                                    <label>Username or email address *</label>
                                    <input type="text" placeholder="Name or E-mail" />
                                    <label>Password *</label>
                                    <input type="password" placeholder="Password" />
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox" type="checkbox" checked>
                                        <label for="checkbox">Remember Me</label>
                                    </div>
                                    <button type="submit" value="Login">Login</button>
                                    <button class="form-cancel" type="submit" value="">Cancel</button>
                                    <label class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal End-->
            <!-- Offcanvas Menu Start -->
            <div id="offcanvas-body-wrapper" class="offcanvas-body-wrapper">
                <div id="offcanvas-nav-close" class="offcanvas-nav-close offcanvas-menu-btn">
                    <a href="#" class="menu-times re-point">
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="offcanvas-main-body">
                    <ul id="accordion" class="offcanvas-nav panel-group">
                        <li class="panel panel-default">
                            <div class="panel-heading">
                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-home" aria-hidden="true"></i>Home Pages</a>
                            </div>
                            <div aria-expanded="false" id="collapseOne" role="tabpanel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="offcanvas-sub-nav">
                                        <li>
                                            <a href="index.html">Home 1</a>
                                        </li>
                                        <li>
                                            <a href="index2.html">Home 2</a>
                                        </li>
                                        <li>
                                            <a href="index3.html">Home 3</a>
                                        </li>
                                        <li>
                                            <a href="index4.html">Home 4</a>
                                        </li>
                                        <li>
                                            <a href="index5.html">Home 5</a>
                                        </li>
                                        <li>
                                            <a href="index6.html">Home 6</a>
                                        </li>
                                        <li>
                                            <a href="index7.html">Home 7</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="author-post.html">
                                <i class="fa fa-user" aria-hidden="true"></i>Author Post Page</a>
                        </li>
                        <li class="panel panel-default">
                            <div class="panel-heading">
                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="fa fa-file-text" aria-hidden="true"></i>Post Pages</a>
                            </div>
                            <div aria-expanded="false" id="collapseTwo" role="tabpanel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="offcanvas-sub-nav">
                                        <li>
                                            <a href="post-style-1.html">Post Style 1</a>
                                        </li>
                                        <li>
                                            <a href="post-style-2.html">Post Style 2</a>
                                        </li>
                                        <li>
                                            <a href="post-style-3.html">Post Style 3</a>
                                        </li>
                                        <li>
                                            <a href="post-style-4.html">Post Style 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="panel panel-default">
                            <div class="panel-heading">
                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>News Details Pages</a>
                            </div>
                            <div aria-expanded="false" id="collapseThree" role="tabpanel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="offcanvas-sub-nav">
                                        <li>
                                            <a href="single-news-1.html">News Details 1</a>
                                        </li>
                                        <li>
                                            <a href="single-news-2.html">News Details 2</a>
                                        </li>
                                        <li>
                                            <a href="single-news-3.html">News Details 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="archive.html">
                                <i class="fa fa-archive" aria-hidden="true"></i>Archive Page</a>
                        </li>
                        <li class="panel panel-default">
                            <div class="panel-heading">
                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i>Gallery Pages</a>
                            </div>
                            <div aria-expanded="false" id="collapseFour" role="tabpanel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="offcanvas-sub-nav">
                                        <li>
                                            <a href="gallery-style-1.html">Gallery Style 1</a>
                                        </li>
                                        <li>
                                            <a href="gallery-style-2.html">Gallery Style 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="404.html">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>404 Error Page</a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <i class="fa fa-phone" aria-hidden="true"></i>Contact Page</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Offcanvas Menu End -->











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
        <!-- Isotope js -->
        <script src="{{asset('view/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('view/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Ticker Js -->
        <script src="{{asset('view/js/ticker.js')}}" type="text/javascript"></script>
        <!-- Custom Js -->
        <script src="{{asset('view/js/main.js')}}" type="text/javascript"></script>
    </body>

</html>
