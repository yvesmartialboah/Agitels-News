@extends('layouts.navbar-internaute') @section('content')

         
<!-- Breadcrumb Area Start Here -->
            <section class="breadcrumbs-area" style="background-image: url('view/img/banner/breadcrumbs-banner.jpg');">
                <div class="container">
                    <div class="breadcrumbs-content">
                        <h1>Articles</h1>
                        <ul>
                            <li>
                                <a href="{{route('accueil')}}">Accueil</a> -</li>
                            <li>Publications</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End Here -->
            <!-- Gallery Page Area Start Here -->
            <section class="bg-body section-space-default">
                <div class="container menu-list-wrapper">
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
                                            <img src="{{asset('view/img/banner/play.png')}}" alt="play" class="img-fluid">
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
                                            <li>
                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                <a href="#">25</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-dark">
                                        <a href="{{route('view_interview', $Interview->id)}}">{{$Interview->libelle}}.</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                    <div class="row mt-30">
                        <div class="col-12">
                            <div class="container text-center">
                            <div class="row no-gutters divider blog-post-slider">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <a href="{{$Interview_present->previousPageUrl()}}" class="prev-article">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>Article Pr??c??dent</a>
                                        <!-- <h3 class="title-medium-dark pr-50">Wonderful Outdoors Experience: Eagle Spotting in Alaska</h3> -->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-rights">
                                        <a href="{{$Interview_present->nextPageUrl()}}" class="next-article">Article Suivant
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                        <!-- <h3 class="title-medium-dark pl-50">The only thing that overcomes hard luck is hard work</h3> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Gallery Page Area End Here -->


@endsection