<!DOCTYPE html>
<html lang="en">

<head>
    <title>L'agitélien</title>
    <meta charset="utf-8" />
    <link rel="icon" href="img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="{{asset('src/dist/semantic.min.css')}}" rel="stylesheet" />
    <link href="{{asset('src/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('src/css/main.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="{{asset('src/plugins/pacejs/pace.css')}}" rel="stylesheet" />

    <link href="{{asset('src/plugins/trumbowyg/ui/trumbowyg.css')}}" rel="stylesheet" />
    <link href="{{asset('src/plugins/tinymce/skins/lightgray/skin.min.css')}}" rel="stylesheet" />
    
</head>
<body>



<div id="contextWrap">
        <!--sidebar-->
        <div class="ui sidebar vertical left menu overlay  borderless visible sidemenu inverted  grey" style="-webkit-transition-duration: 0.1s; transition-duration: 0.1s;" data-color="grey">
            <a class="item logo" href="{{route('home')}}">
                <img src="{{asset('src/img/logo.png')}}" alt="stagblogo" /><img src="{{asset('src/img/thumblogo.png')}}" alt="stagblogo" class="displaynone" />
            </a>
            <div class="ui accordion inverted">

                <a class="title item">
                    <i class="ion-speedometer titleIcon icon"></i> Dashboard <i class="dropdown icon"></i>
                </a>
                <div class="content">
                    <a class="item" href="{{url('/')}}">
                    Accueil
                </a><a class="item" href="{{route('home')}}">
                    Mon Profil
                </a>
                </div>

                @membre

                <div class="title item">
                    <i class="ion-ios-lightbulb titleIcon icon"></i>

                    <i class="dropdown icon"></i> Gestion du journal
                </div>
                <div class="content">
                    <a class="item" href="{{route('auteurs.create')}}">
                    Ajouter un rédacteur
                </a>

                <a class="item" href="{{route('publications.create')}}">
                   Ajouter un nouvel article
                </a>

                <a class="item" href="{{route('flash.create')}}">
                   Ajouter un FlashInfo
                </a>

                <a class="item" href="{{route('interviews.create')}}">
                    Ajouter une interview
                </a>

                </div>

                  <div class="title item">
                    <i class="ion-briefcase titleIcon icon"></i>

                    <i class="dropdown icon"></i> Affichage du Journal
                </div>
                <div class="content">
                    <a class="item" href="{{route('auteurs.index')}}">
                    Liste des rédacteurs
                </a>

                <a class="item" href="{{route('publications.index')}}">
                   Liste des articles
                </a>

                <a class="item" href="{{route('flash.index')}}">
                   Liste des FlashInfos
                </a>

                    <a class="item" href="{{route('interviews.index')}}">
                    Liste des interviews
                </a>
                </div>
                @endmembre
            </div>
            @membre
            <div class="ui divider"></div>
            <a class="item" href="#">
                <i class="ion-printer icon"></i> <span class="colhidden">-----</span>
            </a>
            <a class="item" href="#">
                <i class="ion-code icon"></i> <span class="colhidden">-----</span>
            </a>
            @endmembre
            <div class="ui divider"></div>
        </div>


        <div class="pusher">
            <!--navbar-->
            <div class="navslide navwrap">
                <div class="ui menu icon borderless grid" data-color="inverted white">
                    <a class="item labeled openbtn">
                        <i class="ion-navicon-round big icon"></i>
                    </a>
                    <a class="item labeled expandit" onclick="toggleFullScreen(document.body)">
                        <i class="ion-arrow-expand big icon"></i>
                    </a>
                    <!-- <div class="item ui colhidden">
                        <div class="ui icon input">
                            <input type="text" placeholder="Search...">
                            <i class="search icon"></i>
                        </div>
                    </div> -->
                    <div class="right menu colhidden">

                        <div class="ui dropdown item labeled icon">
                            <i class="bell icon"></i>
                            <div class="ui red label mini circular">6</div>
                            <div class="menu">
                                <div class="header">
                                   Liste des notifications
                                </div>
                                <div class="item">
                                    <img class="ui avatar image" src="src/img/avatar/people/enid.png" alt="label-image" /> Janice Robinson
                                </div>
                             
                               
                            </div>
                        </div>
                      <!--   <div class="ui dropdown item">
                            Language <i class="dropdown icon"></i>
                            <div class="menu">
                                <a class="item"><i class="united kingdom flag"></i>English</a>
                                <a class="item"><i class="turkey flag"></i>Turkish</a>
                                <a class="item"><i class="spain flag"></i>Spanish</a>
                            </div>
                        </div> -->
                        <div class="ui dropdown item">
                             @if(Auth::user()->sex == "M")
                            <img class="ui mini circular image" src="{{asset('src/img/avatar/people/Daryl.png')}}" alt="label-image" />
                            @else
                            <img class="ui mini circular image" src="{{asset('src/img/avatar/people/enid.png')}}" alt="label-image" />
                            @endif
                            <div class="menu">
                                  @guest
                                <a class="item" href="{{ route('login') }}">Connexion</a>
                                  @if (Route::has('register'))
                                <a class="item" href="{{ route('register') }}">Inscription</a>
                                  @endif
                                @else
                                <!-- <a class="item" href="settings.html">Settings</a> -->
                                <div class="ui divider"></div>
                                <a class="item"> Souhaitez vous, vous déconnectez ?</a>
                                <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                         Déconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @endguest
                            </div>
                        </div>
                    

                    </div>
                </div>
            </div>
            <!--navbar-->

    @yield('content')




    <!--jquery-->
    <script src="{{asset('src/js/jquery-2.1.4.min.js')}}"></script>
    <!--jquery-->
    <!--semantic-->
    <script src="{{asset('src/dist/semantic.min.js')}}"></script>
    <!--semantic-->
    <script src="{{asset('src/plugins/cookie/js.cookie.js')}}"></script>
    <script src="{{asset('src/plugins/nicescrool/jquery.nicescroll.min.js')}}"></script>

    <script data-pace-options='{ "ajax": false }' src="{{asset('src/plugins/pacejs/pace.js')}}"></script>

    <script src="{{asset('src/plugins/datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('src/js/customjs/custom-datatable.js')}}"></script>

    <script src="{{asset('src/plugins/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('src/plugins/trumbowyg/trumbowyg.js')}}"></script>
    <script src="{{asset('src/plugins/tinymce/themes/modern/theme.min.js')}}"></script>
     <script src="{{asset('src/js/customjs/custom-editor.js')}}"></script>

    <script src="{{asset('src/js/main.js')}}"></script>
    <script>
        //some tooltip function
        $(".avt").popup({
            position: "top center"
        });
        //some tooltip function
    </script>
</body>
</html>