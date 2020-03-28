@extends('layouts.sidebar-profil') @section('content')

            <!--maincontent-->
        <div class="mainWrap navslide profilepage">
            <div class="ui equal width left aligned padded grid stackable">
                <!--Site Content-->
                <!--Site Content-->

                <div class="sixteen wide tablet sixteen wide computer column profileheader row no-padding">
                    <div class="column  left floated">
                        <div class="ui items">
                            <div class="item">
                                <a class="ui small circular image">
                                    @if(Auth::user()->sex == "M")
                                    <img src="src/img/avatar/people/Daryl.png" alt="label-image" />
                                    @else
                                    <img src="src/img/avatar/people/Meggie.png" alt="label-image" />
                                    @endif
                                    <i class="circle mini red icon avt" data-content="Offline" data-variation="inverted redli"></i>
                                </a>
                                <div class="middle aligned content hiddenui">
                                    <div class="header">
                                        <i class="like icon"></i>
                                        {{Auth::user()->name}}
                                    </div>
                                    <div class="meta">
                                        {{Auth::user()->fonction}}, <i class="icon map marker"></i> {{Auth::user()->residence}}
                                    </div>
                                </div>
                                @membre
                                <div class="ui cards">
                                    <div class="card">
                                        <div class="content">
                                            <i class="right floated dollar sign icon"></i>
                                            <div class="header">Don </div>
                                            <div class="meta">Reçu sur la plateforme l'<b><i>Agitelien</i></b> </div>
                                            <div class="description"><i class="eye icon"></i> <b>1.500.000</b><i class="dollar sign icon"></i> </div>
                                        </div>
                                    </div>
                                </div>
                                @endmembre
                            </div>
                        </div>
                    </div>
                    <div class="column hiddenui">
                        <div class="description right aligned">
                             <div class="ui cards">
                                 <div class="card">
                                    <div class="content">
                                        <i class="right floated video icon"></i>
                                        <i class="right floated microphone icon"></i>
                                        <div class="header">Interviews </div>
                                        <div class="meta">Adventure sur le <b><i>terrain</i></b> </div>
                                        <div class="description"><i class="eye icon"></i> <b>{{$count_Int}}</b> </div>
                                    </div>
                                </div>
                                
                               <div class="card">
                                    <div class="content">
                                        <i class="right floated newspaper icon"></i>
                                        <div class="header">Publications </div>
                                        <div class="meta">Articles <b><i>publiés</i></b> </div>
                                        <div class="description"><i class="eye icon"></i> <b>{{$count_Pub}}</b> </div>
                                    </div>
                                </div>
                            </div>
                                <!-- Réservé à l'admin (au membre du journal) -->
                            @membre
                            <div class="ui cards">
                                <div class="card">
                                    <div class="content">
                                        <i class="right floated pencil alternate icon"></i>
                                        <div class="header">Rédacteurs </div>
                                        <div class="meta">Membres du journal l'<b><i>Agitelien</i></b> </div>
                                        <div class="description"><i class="eye icon"></i> <b>{{$count_Auth}}</b> </div>
                                    </div>
                                </div>
                                 <div class="card">
                                    <div class="content">
                                        <i class="right floated dollar sign icon"></i>
                                        <div class="header">Newsletter </div>
                                        <div class="meta">Nombre de personnes <b><i>abonnés</i></b> </div>
                                        <div class="description"><i class="eye icon"></i> <b>{{$count_newsletter}}</b> </div>
                                    </div>
                                </div>
                            </div>
                            @endmembre
                            <!-- <div class="ui divider"></div> -->
                            <!-- <button class="ui inverted black button follow">----</button> -->
                        </div>
                    </div>
                </div>
                <div class="ui menu fluid no-radius borderless stackable" style="margin-top:0">
                    <a class="item active dark">Posts</a>
                </div>

                <div class="row">

                     <div class="sixteen wide tablet eight wide computer column">
                        <div class="ui segments">
                            <div class="ui segment">
                                <h3 class="ui header">Dernieres Interviews postées</h3>
                            </div>
                            <div class="ui segment">
                                <div class="ui items">
                                    @foreach ($last_interview_posts as $Int)
                                    <div class="item">
                                        
                    @if($Int->statut == 'video')
                    <iframe width="180" height="110" src="{{$Int->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else 
                    <iframe width="180" height="120" scrolling="no" frameborder="no" allow="autoplay" src="{{$Int->audio_url}}"></iframe>
                    @endif
                                
                                        <div class="content">
                                            <a class="header" href="#">&nbsp;&nbsp; {{$Int->libelle}}</a>
                                            
                                            <div class="description">
                                                <p>&nbsp;&nbsp;
                                                    {!! Str::limit($Int->description, 50, ' ...') !!}
                                                </p>
                                            </div>

                                            <div class="meta">
                                                <span>&nbsp;&nbsp; posté le : {{date('d-m-Y', strtotime($Int->created_at)) }} </span>
                                            </div>
                                             <div class="meta">
                                                <span class="cinema">&nbsp;&nbsp; Rédigé par : <b>{{$Int->Auteur->nom}} {{$Int->Auteur->prenom}}</b></span>
                                            </div>
                                            <div class="extra">&nbsp;&nbsp;
                                                <button class="ui greenli inverted tiny button follow">
                                                    {{$Int->typeInterview->libelle}}</button>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sixteen wide tablet eight wide computer column">
                        <div class="ui segments">
                            <div class="ui segment">
                                <h3 class="ui header">Derniers articles postés</h3>
                            </div>
                            <div class="ui segment">
                                <div class="ui items">
                                    @foreach ($derniers_posts as $Pub)
                                    <div class="item">
                                        <div class="ui tiny rounded image">
                                            <img src="{{$Pub->image}}" />
                                            <i class="circle mini green icon avt" data-content="Online" data-variation="inverted greenli"></i>
                                        </div>
                                        <div class="content">
                                            <a class="header" href="#">{{$Pub->libelle}}</a>
                                        
                                            <div class="description">
                                                <p>
                                                    {!! Str::limit($Pub->contenu, 50, ' ...') !!}
                                                </p>
                                            </div>

                                            <div class="meta">
                                                <span> posté le : {{date('d-m-Y', strtotime($Pub->created_at)) }} </span>
                                            </div>
                                             <div class="meta">
                                                <span class="cinema">Rédigé par : <b>{{$Pub->Auteur->nom}} {{$Pub->Auteur->prenom}}</b></span>
                                            </div>
                                            <div class="extra">
                                                <button class="ui greenli inverted tiny button follow">{{$Pub->typePublication->libelle}}</button>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    <!-- ------- -->
                    <!-- ------- -->
        

                                <!-- Commentaires -->
               <!--  <div class="row">
                         <div class="sixteen wide tablet eight wide computer column">
                        <div class="ui segment">
                            <div class="ui feed timeline">
                                <div class="event">
                                    <div class="label">
                                        <img src="src/img/avatar/people/Abraham.png" alt="label-image" />
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <a class="user">
                                                Francis Baldwin
                                            </a> added you as a friend
                                            <div class="date">
                                                1 Hour Ago
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 4 Likes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="label">
                                        <img src="src/img/avatar/people/carol.png" alt="label-image" />
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <a>Lindsey Daniels</a> added <a>2 new illustrations</a>
                                            <div class="date">
                                                4 days ago
                                            </div>
                                        </div>
                                        <div class="extra images">
                                            <a><img src="img/bg/1.png" alt="bg-image" /></a>
                                            <a><img src="img/bg/3.png" alt="bg-image" /></a>
                                        </div>
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 1 Like
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="label">
                                        <img src="src/img/avatar/people/Daryl.png" alt="label-image" />
                                    </div>
                                    <div class="content">
                                        <div class="summary">
                                            <a class="user">
                                                Walter  Stewart
                                            </a> added you as a friend
                                            <div class="date">
                                                2 Days Ago
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <a class="like">
                                                <i class="like icon"></i> 8 Likes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>
        <!--maincontent-->
    </div>
    </div>







@endsection

@membre

<!-- Je suis Un admin -->

@endmembre