@extends('layouts.navbar-internaute') @section('content')

<!-- Slide Menu -->
            <section class="bg-accent section-space-less2">
                <div class="container">
                    <div class="row tab-space1">
                        <div class="col-lg-6 col-md-12">
                            <div class="img-overlay-70 img-scale-animate mb-2" id="cadreTopLeft">
                                <img src="image_publication/{{$AvouslHonneur_slide->image}}" alt="news" class="img-fluid width-100">
                                <div class="mask-content-lg">
                                    <div class="topic-box-sm color-cinnabar mb-20">{{$AvouslHonneur_slide->typePublication->libelle}}</div>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>Par</span>
                                                <a href="#">
                                                    {{ $AvouslHonneur_slide->Auteur->nom }}
                                                    {{ $AvouslHonneur_slide->Auteur->prenom }}
                                                </a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                                    {{date('d-m-Y', strtotime($AvouslHonneur_slide->created_at)) }}
                                            </li>  
                                        </ul>
                                    </div>
                                    <h1 class="title-medium-light">
                                        <a href="{{route('view_article',$AvouslHonneur_slide->id)}}">{{$AvouslHonneur_slide->libelle}}</a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <style>
                            #cadreTopRight{
                                height: 183px;
                            }

                            #cadreBotLeft{
                                height: 165px;
                            }

                            #cadreTopLeft{
                                height: 350px;
                            }

                        </style>
                        <div class="col-lg-6 col-md-12">
                            <div class="row tab-space1">
                                <div class="col-12">
                                    <div class="img-overlay-70 img-scale-animate mb-2" id="cadreTopRight">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-azure-radiance mb-10"> 
                                                {{$Reportage_slide->typePublication->libelle}}
                                            </div>
                                            <h2 class="title-medium-light">
                                                <a href="{{route('view_article',$Reportage_slide->id)}}">{{$Reportage_slide->libelle}}</a>
                                            </h2>
                                        </div>
                                        <img src="image_publication/{{$Reportage_slide->image}}" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="img-overlay-70 img-scale-animate mb-2" id="cadreBotLeft">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-apple mb-10">{{$Lecondevie_slide->typePublication->libelle}}</div>
                                            <h3 class="title-medium-light">
                                                <a href="{{route('view_article',$Lecondevie_slide->id)}}">{{$Lecondevie_slide->libelle}} </a>
                                            </h3>
                                        </div>
                                        <img src="image_publication/{{$Lecondevie_slide->image}}" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="img-overlay-70 img-scale-animate mb-2" id="cadreBotLeft">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-razzmatazz mb-10"> 
                                                {{$Anglais_slide->typePublication->libelle}}
                                            </div>
                                            <h3 class="title-medium-light">
                                                <a href="{{route('view_article',$Anglais_slide->id)}}">{{$Anglais_slide->libelle}}</a>
                                            </h3>
                                        </div>
                                        <img src="Ang640x480/{{$Anglais_slide->image}}" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!-- Slide Menu -->

            <!-- News Slider Area End Here -->
            <!-- Feature News Area Start Here -->
            <section class="section-space-less30">
                <div class="container">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">INTERVIEW RECENTS</div>
                    </div>
                    <div class="row">
                        @foreach($Interview_present as $Interview)
                        <div class="col-lg-4 col-md-12">
                            <div class="hover-show-play-btn item-shadow-gray mb-30">
                                @if($Interview->statut == 'video')
                                <div>
                                @else 
                                <div class="img-overlay-70">
                                @endif
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">
                                            {{$Interview->typeInterview->libelle}}
                                        </div>
                                    </div>
                                    @if($Interview->statut == 'video')
                    <iframe width="100%" height="200" src="{{$Interview->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else 
                    <iframe width="100%" height="200" scrolling="no" frameborder="no" allow="autoplay" src="{{$Interview->audio_url}}"></iframe>
                    @endif
                                    <div class="text-center">
                                        @if($Interview->statut == 'video')
                                        <!-- <a class="play-btn popup-youtube" href="{{$Interview->video_url}}"> -->
                                        @else 
                                        <a class="play-btn popup-youtube" href="{{$Interview->audio_url}}">
                                            <img src="view/img/banner/play.png" alt="play" class="img-fluid">
                                        @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-body item-shadow-gray box-padding20">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>Par</span>
                                                <a href="#">{{$Interview->Auteur->nom}}
                                                    {{$Interview->Auteur->prenom}}
                                                </a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{date('d-m-Y', strtotime($Interview->created_at)) }}</li>
                                            <!-- <li>
                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                <a href="#">25</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="{{route('view_interview',$Interview->id)}}">{{$Interview->libelle}}.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Feature News Area End Here -->
            <!-- Latest Articles Area Start Here -->
            <section class="section-space-bottom-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 mb-30">
                            <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">Portail des entreprises</div>
                            </div>
                            <div class="item-box-light-md-less30 ie-full-width">
                                @foreach($PortailEntreprise as $Portail)
                                <div class="media mb-30 media-none--sm">
                                    <div class="position-relative width-40">
                                        <a href="{{route('view_article',$Portail->id)}}" class="img-opacity-hover">
                                            <img src="image_publication/{{$Portail->image}}" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">
                                                {{$Portail->typePublication->libelle}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>Par</span>
                                                    <a href="#">
                                                        {{$Portail->Auteur->nom}}
                                                        {{$Portail->Auteur->prenom}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>{{date('d-m-Y', strtotime($Portail->created_at)) }}</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15 mb5-md">
                                            <a href="{{route('view_article',$Portail->id)}}">{{$Portail->libelle}}</a>
                                        </h3>
                                        <p>
                                            {!! Str::limit($Portail->contenu, 50, ' ...') !!} 
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                                <div class="row">
                                    <div class="col-lg-7 col-md-12"></div>
                                    <div class="col-lg-3 offset-6 col-md-12">
                                        <a href="{{route('list_articles')}}" class="btn-ftf-dtp-52 mb-15 mb5-md">Lire Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            <!-- Publicité -->
                            @include("Components.publicite_accueil_1")
                            <!-- Publicité -->
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray">
                                    <div class="topic-box-lg color-cod-gray">Anglais</div>
                                </div>
                                <div class="row">
                                    @foreach($Anglais as $Ang)
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mt-30">
                                        <div class="item-shadow-gray">
                                            <div class="position-relative">
                                                <div class="topic-box-top-xs">
                                                    <div class="topic-box-sm color-cod-gray mb-20">
                                                        {{$Anglais_slide->typePublication->libelle}}
                                                    </div>
                                                </div>
                                                <a href="{{route('view_article',$Anglais_slide->id)}}" class="img-opacity-hover">
                                                    <img src="Ang640x480/{{$Anglais_slide->image}}" alt="news" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="box-padding15 bg-body item-shadow-gray">
                                                <h3 class="title-medium-dark size-sm mb-10">
                                                    <a href="{{route('view_article',$Anglais_slide->id)}}">{{$Anglais_slide->libelle}}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Latest Articles Area End Here -->
            <!-- Trending News Area Start Here -->
            <section class="bg-secondary-accent section-space-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="topic-border color-cod-gray mb-30 width-100">
                                <div class="topic-box-lg color-cod-gray">Affairage</div>
                            </div>
                        </div>
                    </div>
                    <div class="ne-carousel nav-control-top2 color-cod-gray" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
                        data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false"
                        data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true"
                        data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
                        data-r-medium-nav="true" data-r-medium-dots="false" data-r-Large="4" data-r-Large-nav="true" data-r-Large-dots="false">
                        @foreach($Affairage as $Aff)
                        <div class="hover-show-play-btn item-shadow-gray mb-1">
                            <div class="img-overlay-70">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">{{$Aff->typePublication->libelle}}</div>
                                </div>
                                <img src="image_publication/{{$Aff->image}}" alt="news" class="img-fluid">
                            </div>
                            <div class="bg-body item-shadow-gray box-padding30">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>{{date('d-m-Y', strtotime($Aff->created_at)) }}</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="{{route('view_article',$Aff->id)}}">{{$Aff->libelle}}</a>
                                </h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Trending News Area Start Here -->
            <!-- Category Area Start Here -->
            <section class="section-space-bottom-less30">
                <div class="container">
                    <div class="row">
                        @foreach($Portrait as $Port)
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="category-box-layout1 overlay-dark-level-2 img-grayscale-hover text-center mb-30">
                                <img src="image_publication/{{$Port->image}}" alt="news" class="img-fluid">
                                <div class="content p-30-r">
                                    <div class="ctg-title-xs">{{$Port->typePublication->libelle}}</div>
                                    <h3 class="title-regular-light size-lg">
                                        <a href="{{route('view_article',$Port->id)}}">{{$Port->libelle}}</a>
                                    </h3>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>Par</span>
                                                <a href="#">
                                                    {{$Port->Auteur->nom}}
                                                    {{$Port->Auteur->prenom}}
                                                </a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{date('d-m-Y', strtotime($Port->created_at)) }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Category Area End Here -->
            <!-- More News Area Start Here -->
            <section class="section-space-bottom-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">Jeux et Humour</div>
                            </div>
                            <div class="row">
                                @foreach($JeuxetHumour as $Jeux)
                                <div class="col-md-12 col-sm-6 col-12 mb-30">
                                    <div class="media item-shadow-gray bg-body media-none--sm">
                                        <div class="position-relative width-40 width46-lg">
                                            <a href="{{route('view_article',$Jeux->id)}}" class="img-opacity-hover img-overlay-70">
                                                <img src="image_publication/{{$Jeux->image}}" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cod-gray mb-20">{{$Jeux->typePublication->libelle}}</div>
                                            </div>
                                        </div>
                                        <div class="media-body media-padding30 p-mb-none-child">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>Par</span>
                                                        <a href="#">
                                                            {{$Jeux->Auteur->nom}}
                                                            {{$Jeux->Auteur->prenom}}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{date('d-m-Y', strtotime($Jeux->created_at)) }}</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="{{route('view_article',$Jeux->id)}}">{{$Jeux->libelle}}</a>
                                            </h3>
                                            <p>
                                                {!! Str::limit($Jeux->contenu, 50, ' ...') !!} 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">Leçon de Vie</div>
                            </div>
                            <div class="row">
                                @foreach($Lecondevie as $Vie)
                                <div class="col-md-12 col-sm-6 col-12 mb-30">
                                    <div class="media item-shadow-gray bg-body media-none--sm">
                                        <div class="position-relative width-40 width46-lg">
                                            <a href="{{route('view_article',$Vie->id)}}" class="img-opacity-hover img-overlay-70">
                                                <img src="image_publication/{{$Vie->image}}" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cod-gray mb-20">{{$Vie->typePublication->libelle}}</div>
                                            </div>
                                        </div>
                                        <div class="media-body media-padding30 p-mb-none-child">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>Par</span>
                                                        <a href="#">
                                                            {{$Vie->Auteur->nom}}
                                                            {{$Vie->Auteur->prenom}}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{date('d-m-Y', strtotime($Vie->created_at)) }}</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="{{route('view_article',$Vie->id)}}">{{$Vie->libelle}}</a>
                                            </h3>
                                            <p>
                                                {!! Str::limit($Vie->contenu, 50, ' ...') !!} 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            </div>
                        </div> 
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            @include("Components.rubriques")
                            @include("Components.publicite_accueil_2")
                            @include("Components.newsletter")
                        </div>
                    </div>
                </div>
            </section>
            <!-- More News Area End Here -->
         



@endsection