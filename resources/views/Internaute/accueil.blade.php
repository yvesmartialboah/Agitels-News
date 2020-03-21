@extends('layouts.navbar-internaute') @section('content')

<!-- Slide Menu -->
            <section class="bg-accent section-space-less2">
                <div class="container">
                    <div class="row tab-space1">
                        <div class="col-lg-6 col-md-12">
                            <div class="img-overlay-70 img-scale-animate mb-2" id="cadreTopLeft">
                                <img src="Ang640x480/{{$AvouslHonneur_slide->image}}" alt="news" class="img-fluid width-100">
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
                                        <a href="single-news-1.html">{{$AvouslHonneur_slide->libelle}}</a>
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
                                                <a href="#">{{$Reportage_slide->libelle}}</a>
                                            </h2>
                                        </div>
                                        <img src="Ang640x480/{{$Reportage_slide->image}}" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="img-overlay-70 img-scale-animate mb-2" id="cadreBotLeft">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-apple mb-10">{{$Lecondevie_slide->typePublication->libelle}}</div>
                                            <h3 class="title-medium-light">
                                                <a href="single-news-3.html">{{$Lecondevie_slide->libelle}} </a>
                                            </h3>
                                        </div>
                                        <img src="Ang640x480/{{$Lecondevie_slide->image}}" alt="news" class="img-fluid width-100">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="img-overlay-70 img-scale-animate mb-2" id="cadreBotLeft">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-razzmatazz mb-10"> 
                                                {{$Anglais_slide->typePublication->libelle}}
                                            </div>
                                            <h3 class="title-medium-light">
                                                <a href="single-news-1.html">{{$Anglais_slide->libelle}}</a>
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
                                                <a href="single-news-1.html">{{$Interview->Auteur->nom}}
                                                    {{$Interview->Auteur->prenom}}
                                                </a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{date('d-m-Y', strtotime($Interview->created_at)) }}</li>
                                            <li>
                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                <a href="single-news-1.html">25</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="single-news-3.html">{{$Interview->libelle}}.</a>
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
                                <div class="topic-box-lg color-cod-gray">Latest Articles</div>
                            </div>
                            <div class="img-overlay-70 img-scale-animate">
                                <img src="img/news/news278.jpg" alt="news" class="img-fluid">
                                <div class="mask-content-lg">
                                    <div class="topic-box-sm color-cod-gray mb-20 hidden-mb">Style Zone</div>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                                            <li>
                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                <a href="single-news-1.html">25</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title-medium-light size-xl d-none d-sm-block">
                                        <a href="single-news-1.html">The Coolest Hynopedia helps female travelers findery health care in Maldivs</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="item-box-light-md-less30 ie-full-width">
                                <div class="media mb-30 media-none--sm">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news279.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">Fashion Today</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>March 22, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15 mb5-md">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                            language ocean. A small river flows by their place and ...
                                        </p>
                                    </div>
                                </div>
                                <div class="media mb-30 media-none--sm">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news280.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">MaxRocket</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>March 22, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15 mb5-md">
                                            <a href="single-news-1.html">Rihanna Rocks Signature Red Lips At Alexander Wang Show</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                            language ocean. A small river flows by their place and ...
                                        </p>
                                    </div>
                                </div>
                                <div class="media mb-30 media-none--sm">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news281.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">Style Zone</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>March 22, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15 mb5-md">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                            language ocean. A small river flows by their place and ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Stay Connected</div>
                                </div>
                                <ul class="stay-connected-light overflow-hidden mb-20">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <div class="connection-quantity">50.2 k</div>
                                            <p>Fans</p>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <div class="connection-quantity">10.3 k</div>
                                            <p>Followers</p>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            <div class="connection-quantity">25.4 k</div>
                                            <p>Fans</p>
                                        </a>
                                    </li>
                                    <li class="rss">
                                        <a href="#">
                                            <i class="fa fa-rss" aria-hidden="true"></i>
                                            <div class="connection-quantity">20.8 k</div>
                                            <p>Subscriber</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-box">
                                <div class="ne-banner-layout1 text-center">
                                    <a href="#">
                                        <img src="img/banner/banner12.jpg" alt="ad" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray">
                                    <div class="topic-box-lg color-cod-gray">Recent News</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mt-30">
                                        <div class="item-shadow-gray">
                                            <div class="position-relative">
                                                <div class="topic-box-top-xs">
                                                    <div class="topic-box-sm color-cod-gray mb-20">Daily Wear</div>
                                                </div>
                                                <a href="single-news-1.html" class="img-opacity-hover">
                                                    <img src="img/news/news283.jpg" alt="news" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="box-padding15 bg-body item-shadow-gray">
                                                <h3 class="title-medium-dark size-sm mb-10">
                                                    <a href="single-news-1.html">Rosie Hutin ghton Habits Career.</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mt-30">
                                        <div class="item-shadow-gray">
                                            <div class="position-relative">
                                                <div class="topic-box-top-xs">
                                                    <div class="topic-box-sm color-cod-gray mb-20">MaxRocket</div>
                                                </div>
                                                <a href="single-news-1.html" class="img-opacity-hover">
                                                    <img src="img/news/news284.jpg" alt="news" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="box-padding15 bg-body item-shadow-gray">
                                                <h3 class="title-medium-dark size-sm mb-10">
                                                    <a href="single-news-1.html">Someone Has Cal The Total Cost</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mt-30">
                                        <div class="item-shadow-gray">
                                            <div class="position-relative">
                                                <div class="topic-box-top-xs">
                                                    <div class="topic-box-sm color-cod-gray mb-20">Fashion</div>
                                                </div>
                                                <a href="single-news-1.html" class="img-opacity-hover">
                                                    <img src="img/news/news285.jpg" alt="news" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="box-padding15 bg-body item-shadow-gray">
                                                <h3 class="title-medium-dark size-sm mb-10">
                                                    <a href="single-news-1.html">Rosie Hutin ghton Habits Career.</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mt-30">
                                        <div class="item-shadow-gray">
                                            <div class="position-relative">
                                                <div class="topic-box-top-xs">
                                                    <div class="topic-box-sm color-cod-gray mb-20">Style Zone</div>
                                                </div>
                                                <a href="single-news-1.html" class="img-opacity-hover">
                                                    <img src="img/news/news282.jpg" alt="news" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="box-padding15 bg-body item-shadow-gray">
                                                <h3 class="title-medium-dark size-sm mb-10">
                                                    <a href="single-news-1.html">Rosie Hutin ghton Habits Career.</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mt-30">
                                        <div class="item-shadow-gray">
                                            <div class="position-relative">
                                                <div class="topic-box-top-xs">
                                                    <div class="topic-box-sm color-cod-gray mb-20">Daily Wear</div>
                                                </div>
                                                <a href="single-news-1.html" class="img-opacity-hover">
                                                    <img src="img/news/news286.jpg" alt="news" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="box-padding15 bg-body item-shadow-gray">
                                                <h3 class="title-medium-dark size-sm mb-10">
                                                    <a href="single-news-1.html">Rosie Hutin Ghton Habits Career.</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mt-30">
                                        <div class="item-shadow-gray">
                                            <div class="position-relative">
                                                <div class="topic-box-top-xs">
                                                    <div class="topic-box-sm color-cod-gray mb-20">Style Zone</div>
                                                </div>
                                                <a href="single-news-1.html" class="img-opacity-hover">
                                                    <img src="img/news/news287.jpg" alt="news" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="box-padding15 bg-body item-shadow-gray">
                                                <h3 class="title-medium-dark size-sm mb-10">
                                                    <a href="single-news-1.html">Rosie Hutin Ghton Habits Career.</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="topic-box-lg color-cod-gray">Trending Posts</div>
                            </div>
                        </div>
                    </div>
                    <div class="ne-carousel nav-control-top2 color-cod-gray" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
                        data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false"
                        data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true"
                        data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
                        data-r-medium-nav="true" data-r-medium-dots="false" data-r-Large="4" data-r-Large-nav="true" data-r-Large-dots="false">
                        <div class="hover-show-play-btn item-shadow-gray mb-1">
                            <div class="img-overlay-70">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Style Zone</div>
                                </div>
                                <img src="img/news/news274.jpg" alt="news" class="img-fluid">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="bg-body item-shadow-gray box-padding30">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Not who has much rich who gives much money</a>
                                </h3>
                            </div>
                        </div>
                        <div class="hover-show-play-btn item-shadow-gray mb-1">
                            <div class="img-overlay-70">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Fashion</div>
                                </div>
                                <img src="img/news/news275.jpg" alt="news" class="img-fluid">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="bg-body item-shadow-gray box-padding30">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Rihanna Rocks Signature Red Lips Wang Show life</a>
                                </h3>
                            </div>
                        </div>
                        <div class="hover-show-play-btn item-shadow-gray mb-1">
                            <div class="img-overlay-70">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Daily wear</div>
                                </div>
                                <img src="img/news/news276.jpg" alt="news" class="img-fluid">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="bg-body item-shadow-gray box-padding30">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Not who has much rich who gives much money</a>
                                </h3>
                            </div>
                        </div>
                        <div class="hover-show-play-btn item-shadow-gray mb-1">
                            <div class="img-overlay-70">
                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">Maxrocket</div>
                                </div>
                                <img src="img/news/news277.jpg" alt="news" class="img-fluid">
                                <div class="text-center">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <img src="img/banner/play.png" alt="play" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="bg-body item-shadow-gray box-padding30">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>February 10, 2017</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark">
                                    <a href="single-news-3.html">Rihanna Rocks Signature Red Lips Wang Show life</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Trending News Area Start Here -->
            <!-- Category Area Start Here -->
            <section class="section-space-bottom-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="category-box-layout1 overlay-dark-level-2 img-grayscale-hover text-center mb-30">
                                <img src="img/category/ctg7.jpg" alt="news" class="img-fluid">
                                <div class="content p-30-r">
                                    <div class="ctg-title-xs">Fashion</div>
                                    <h3 class="title-regular-light size-lg">
                                        <a href="post-style-1.html">Rebecca Taylor’s Breezy Spring 2017 Perfect For Kate Middleton</a>
                                    </h3>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="category-box-layout1 overlay-dark-level-2 img-grayscale-hover text-center mb-30">
                                <img src="img/category/ctg8.jpg" alt="news" class="img-fluid">
                                <div class="content p-30-r">
                                    <div class="ctg-title-xs">Style ZOne</div>
                                    <h3 class="title-regular-light size-lg">
                                        <a href="post-style-2.html">Anna Kendrick Stuns In Hollywood Glam Waves At Toronto</a>
                                    </h3>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="category-box-layout1 overlay-dark-level-2 img-grayscale-hover text-center mb-30">
                                <img src="img/category/ctg9.jpg" alt="news" class="img-fluid">
                                <div class="content p-30-r">
                                    <div class="ctg-title-xs">Travel</div>
                                    <h3 class="title-regular-light size-lg">
                                        <a href="post-style-3.html">Rihanna Rocks Signature Red Lips At Alexander Wang Show</a>
                                    </h3>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>by</span>
                                                <a href="single-news-1.html">Adams</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>March 22, 2017</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <div class="topic-box-lg color-cod-gray">More News</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-12 mb-30">
                                    <div class="media item-shadow-gray bg-body media-none--sm">
                                        <div class="position-relative width-40 width46-lg">
                                            <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                                <img src="img/news/news270.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cod-gray mb-20">Fashion</div>
                                            </div>
                                        </div>
                                        <div class="media-body media-padding30 p-mb-none-child">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>by</span>
                                                        <a href="single-news-1.html">Adams</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>March 22, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">Football meras on the backSepatheyTG G6 will theytics.</a>
                                            </h3>
                                            <p>Separated they right at the coast a large ocean. A small river named Duden flows
                                                by their place and ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6 col-12 mb-30">
                                    <div class="media item-shadow-gray bg-body media-none--sm">
                                        <div class="position-relative width-40 width46-lg">
                                            <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                                <img src="img/news/news271.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cod-gray mb-20">Style zone</div>
                                            </div>
                                        </div>
                                        <div class="media-body media-padding30 p-mb-none-child">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>by</span>
                                                        <a href="single-news-1.html">Adams</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>March 22, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                            </h3>
                                            <p>Separated they right at the coast a large ocean. A small river named Duden flows
                                                by their place and ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6 col-12 mb-30">
                                    <div class="media item-shadow-gray bg-body media-none--sm">
                                        <div class="position-relative width-40 width46-lg">
                                            <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                                <img src="img/news/news272.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cod-gray mb-20">Daily Wear</div>
                                            </div>
                                        </div>
                                        <div class="media-body media-padding30 p-mb-none-child">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>by</span>
                                                        <a href="single-news-1.html">Adams</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>March 22, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">A taste of what we like this week at CookA like this current week </a>
                                            </h3>
                                            <p>Separated they right at the coast a large ocean. A small river named Duden flows
                                                by their place and ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6 col-12 mb-30">
                                    <div class="media item-shadow-gray bg-body media-none--sm">
                                        <div class="position-relative width-40 width46-lg">
                                            <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                                <img src="img/news/news273.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cod-gray mb-20">Maxrocke</div>
                                            </div>
                                        </div>
                                        <div class="media-body media-padding30 p-mb-none-child">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>by</span>
                                                        <a href="single-news-1.html">Adams</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>March 22, 2017</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">Football meras on the backSepatheyTG G6 will theytics.</a>
                                            </h3>
                                            <p>Separated they right at the coast a large ocean. A small river named Duden flows
                                                by their place and ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Latest Reviews</div>
                                </div>
                                <ul class="archive-list2 mb-25">
                                    <li>
                                        <a href="#">Football
                                            <span> (12)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Tenis
                                            <span> (04)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Golf
                                            <span> (11)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">WRC
                                            <span> (79)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Horse Racing
                                            <span> (05)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Video
                                            <span> (41)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Travel
                                            <span> (55)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-box">
                                <div class="ne-banner-layout2 text-center">
                                    <a href="#">
                                        <img src="img/banner/banner5.jpg" alt="ad" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Newsletter</div>
                                </div>
                                <div class="newsletter-area bg-primary">
                                    <h2 class="title-medium-light size-xl">Subscribe to our mailing list to get the new updates!</h2>
                                    <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid m-auto mb-15">
                                    <p>Subscribe our newsletter to stay updated</p>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" placeholder="Enter your mail" class="form-control">
                                        <span class="input-group-addon">
                                            <button type="submit">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- More News Area End Here -->
         



@endsection