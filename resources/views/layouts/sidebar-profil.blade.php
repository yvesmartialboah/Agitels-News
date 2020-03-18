<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil</title>
    <meta charset="utf-8" />
    <link rel="icon" href="img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="{{asset('src/dist/semantic.min.css')}}" rel="stylesheet" />
    <link href="{{asset('src/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('src/css/main.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="{{asset('src/plugins/pacejs/pace.css')}}" rel="stylesheet" />
    
</head>
<body>



<div id="contextWrap">
        <!--sidebar-->
        <div class="ui sidebar vertical left menu overlay  borderless visible sidemenu inverted  grey" style="-webkit-transition-duration: 0.1s; transition-duration: 0.1s;" data-color="grey">
            <a class="item logo" href="index-2.html">
                <img src="{{asset('src/img/logo.png')}}" alt="stagblogo" /><img src="{{asset('src/img/thumblogo.png')}}" alt="stagblogo" class="displaynone" />
            </a>
            <div class="ui accordion inverted">

                <a class="title item">
                    <i class="ion-speedometer titleIcon icon"></i> Dashboard <i class="dropdown icon"></i>
                </a>
                <div class="content">
                    <a class="item" href="index-2.html">
                    Dashboard v1
                </a>
                </div>

                <div class="title item">
                    <i class="ion-ios-lightbulb titleIcon icon"></i>

                    <i class="dropdown icon"></i> Apps
                </div>
                <div class="content">
                    <a class="item" href="inbox.html">
                    Inbox
                </a>

                    <a class="item" href="chat.html">
                    Chat
                </a>

                    <a class="item" href="filter.html">
                    Filter
                </a>
                    <a class="item" href="todo.html">
                    Todo
                </a>
                </div>
 
            </div>

            <div class="ui dropdown item displaynone scrolling">
                <span>Dashboard</span>
                <i class="ion-speedometer icon"></i>

                <div class="menu">
                    <div class="header">
                        Dashboard
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="index-2.html">
                    Dashboard v1
                </a>
                </div>
            </div>


            <div class="ui dropdown item displaynone scrolling">
                <span>Apps</span>
                <i class="ion-ios-lightbulb icon"></i>
                <div class="menu">
                    <div class="header">
                        Apps
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="inbox.html">
                    Inbox
                </a>
                    <a class="item" href="filter.html">
                    Filter
                </a>
                    <a class="item" href="todo.html">
                    Todo
                </a>
                </div>
            </div>
            <div class="ui dropdown item displaynone scrolling">
                <span>Layouts</span>
                <i class="ion-ios-world icon"></i>
                <div class="menu">
                    <div class="header">
                        Layouts
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="sidebar.html">
                    Sidebar
                </a>
                    <a class="item" href="menu.html">
                    Nav
                </a>
                </div>
            </div>
            <div class="ui dropdown item displaynone scrolling">
                <span>UI-Kit</span>
                <i class="ion-briefcase icon"></i>
                <div class="menu">
                    <div class="header">
                        UI-Kit
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="breadcrumb.html">
                    Breadcrumb
                </a>
                    <a class="item" href="button.html">
                    Button
                </a>
                    <a class="item" href="divider.html">
                    Divider
                </a>

                    <a class="item" href="flag.html">
                    Flag
                </a>
                    <a class="item" href="icon.html">
                    Icon
                </a>
                    <a class="item" href="image.html">
                    Image
                </a>
                    <a class="item" href="label.html">
                    Label
                </a>
                    <a class="item" href="list.html">
                    List
                </a>
                </div>
            </div>
            <div class="ui dropdown item displaynone scrolling">
                <span>Pages</span>
                <i class="ion-bowtie icon"></i>

                <div class="menu">
                    <div class="header">
                        Pages
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="profile.html">
                    Profile
                </a>

                    <a class="item" href="settings.html">
                    Settings
                </a>

                    <a class="item" href="blank.html">
                    Blank
                </a>
                    <a class="item" href="login.html">
                    Sign In
                </a>
                    <a class="item" href="login.html">
                    Sign Up
                </a>
                    <a class="item" href="forgotpassword.html">
                    Forgot Password
                </a>
                    <a class="item" href="lockme.html">
                    Lock Me Screen
                </a>
                    <a class="item" href="404.html">
                    Error 404
                </a>
                    <a class="item" href="comingsoon.html">
                    Coming Soon
                </a>
                </div>
            </div>
            <div class="ui dropdown item displaynone scrolling">
                <span>Form</span>
                <i class="ion-paintbrush  icon"></i>

                <div class="menu">
                    <div class="header">
                        Form
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="formelements.html">
                    Form Element
                </a>
                    <a class="item" href="input.html">
                    Input
                </a>
                    <a class="item" href="formvalidation.html">
                    Form Validation
                </a>

                    <a class="item" href="editor.html">
                    Html Editor
                </a>
                </div>
            </div>
            <div class="ui dropdown item displaynone scrolling">
                <span>Table</span>
                <i class="ion-flame icon"></i>

                <div class="menu">
                    <div class="header">
                        Table
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="table.html">
                    Static Table
                </a>
                    <a class="item" href="datatable.html">
                    Datatable
                </a>
                    <a class="item" href="editable.html">
                    Editable
                </a>
                </div>
            </div>
            <div class="ui dropdown item displaynone scrolling">
                <span>Charts</span>
                <i class="ion-arrow-graph-up-right icon"></i>

                <div class="menu">
                    <div class="header">
                        Charts
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="chart.html">
                    Charts 1
                </a>
                    <a class="item" href="chart-2.html">
                    Charts 2
                </a>

                </div>
            </div>
            <div class="ui divider"></div>
            <a class="item" href="typography.html">
                <i class="ion-printer icon"></i> <span class="colhidden">Typography</span>
            </a>
            <a class="item" href="document.html">
                <i class="ion-code icon"></i> <span class="colhidden">Document</span>
            </a>
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
                                    People You Might Know
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
                            <img class="ui mini circular image" src="{{asset('src/img/avatar/people/enid.png')}}" alt="label-image" />
                            <div class="menu">
                                <a class="item" href="mail.html">Inbox</a>
                                <a class="item" href="profile.html">Profile</a>
                                <a class="item" href="settings.html">Settings</a>
                                <div class="ui divider"></div>
                                <a class="item">Need Help?</a>
                                <a class="item" href="login.html">Sign Out</a>
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