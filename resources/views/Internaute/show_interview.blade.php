@extends('layouts.navbar-internaute') @section('content')

         
  <!-- News Details Page Area Start Here -->
            <section class="bg-body section-space-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 mb-30">
                            <div class="news-details-layout1">
                                <div class="position-relative mb-30">
                                    @if($Interview->statut == 'video')
                    <iframe width="100%" height="200" src="{{$Interview->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else 
                    <iframe width="100%" height="200" scrolling="no" frameborder="no" allow="autoplay" src="{{$Interview->audio_url}}"></iframe>
                    @endif
                                    <div class="topic-box-top-sm">
                                        <div class="topic-box-sm color-cinnabar mb-20">{{$Interview->typeInterview->libelle}}</div>
                                    </div>
                                </div>
                                <h2 class="title-semibold-dark size-c30">{{$Interview->libelle}}</h2>
                                <ul class="post-info-dark mb-30">
                                    <li>
                                        <a href="#">
                                            <span>Par</span> 
											 	{{ $Interview->Auteur->nom }}
                                                {{ $Interview->Auteur->prenom }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
											{{date('d-m-Y', strtotime($Interview->created_at)) }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-eye" aria-hidden="true"></i>202</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-comments" aria-hidden="true"></i>20</a>
                                    </li>
                                </ul>
                                {!! $Interview->description !!}
                                
                               
                                <!-- <blockquote cite="#" class="bg-accent mt-50 mb-50">
                                    Srem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s. Lorem Ipsum is simply .
                                </blockquote> -->
                            
                                <ul class="blog-tags item-inline">
                                    <li>Tags</li>
                                    <li>
                                        <a href="#">#Business</a>
                                    </li>
                                    <li>
                                        <a href="#">#Magazine</a>
                                    </li>
                                    <li>
                                        <a href="#">#Lifestyle</a>
                                    </li>
                                </ul>

                                <div class="comments-area">
                                    <h2 class="title-semibold-dark size-xl border-bottom mb-40 pb-20">03 Commentaires</h2>
                                    <ul>
                                        <li>
                                            <div class="media media-none-xs">
                                                <img src="img/blog1.jpg" class="img-fluid rounded-circle" alt="comments">
                                                <div class="media-body comments-content media-margin30">
                                                    <h3 class="title-semibold-dark">
                                                        <a href="#">Nitiya ,
                                                            <span> August 29, 2017</span>
                                                        </a>
                                                    </h3>
                                                    <p>Borem Ipsum is simply dummy text of the printing and typesetting industry
                                                        Lorem Ipsum has been the industry's standard dummy text.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media media-none-xs">
                                                <img src="img/blog2.jpg" class="img-fluid rounded-circle" alt="comments">
                                                <div class="media-body comments-content media-margin30">
                                                    <h3 class="title-semibold-dark">
                                                        <a href="#">Fahim ,
                                                            <span> August 29, 2017</span>
                                                        </a>
                                                    </h3>
                                                    <p>Borem Ipsum is simply dummy text of the printing and typesetting industry
                                                        Lorem Ipsum has been the industry's standard dummy text.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="leave-comments">
                                    <h2 class="title-semibold-dark size-xl mb-40">Poster un commentaire </h2>
                                    @guest
                                    <p class="lead text-danger">Pour poster un commentaire, vous devez être connecté au site.</p>
                                    <form id="leave-comments">
                                    @else
                                    <form>
                                    @endguest
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <input placeholder="Name*" class="form-control" type="text">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <input placeholder="Email*" class="form-control" type="email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <input placeholder="Web Address" class="form-control" type="text">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            @guest
                                            @else
                                            <div class="col-12">
                                                <div class="form-group mb-none">
                                                    <button type="submit" class="btn-ftg-ptp-45">Poster</button>
                                                </div>
                                            </div>
                                            @endguest
                                        </div>
                                    </form>     
                                </div>
                            </div>
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                        	@include("Components.article_detail_1")
                            
                             <!-- Publicité xxx -->

                            @include("Components.rubriques")
                            @include("Components.newsletter")

                             <!-- Publicité xxx -->
                            @include("Components.article_detail_2")
                            

                            <!-- Publicité xxx -->
							@include("Components.article_detail_3")
                             
                        </div>
                    </div>
                </div>
            </section>
            <!-- News Details Page Area End Here -->


@endsection