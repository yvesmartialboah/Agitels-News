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
                    <div class="row zoom-gallery menu-list">
                        @foreach($Publication as $Pub)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 menu-item">
                            <div class="gallery-layout-1 mb-40 border-bottom pb-10">
                                <div class="popup-icon-hover img-overlay-hover mb-30">
                                    <a class="" href="{{route('view_article',$Pub->id)}}">
                                        <img src="image_publication/{{$Pub->image}}" alt="news" class="width-100 img-fluid">
                                    </a>
                                    <a href="image_publication/{{$Pub->image}}" class="ne-zoom img-popup-icon" title="Title Here">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
								

                                <div class="topic-box-top-xs">
                                    <div class="topic-box-sm color-cod-gray mb-20">{{$Pub->typePublication->libelle}}</div>
                                </div>
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>Par</span>
                                            <a href="#">
                                            	{{ $Pub->Auteur->nom }}
                                                {{ $Pub->Auteur->prenom }}
                                            </a>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>{{date('d-m-Y', strtotime($Pub->created_at)) }}</li>
                                    </ul>
                                </div>
                                <h3 class="title-semibold-dark size-c22">
                                    <a href="{{route('view_article',$Pub->id)}}">
                                    	{{$Pub->libelle}}
                                	</a>
                                </h3>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                    <div class="row mt-30">
                        <div class="col-12">
                            <div class="loadmore text-center">
                                <a href="#" class="btn-gtf-dtp-50">
                                    <i class="fa fa-circle-o-notch fa-spinner fa-spin" aria-hidden="true"></i>Chargement ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Gallery Page Area End Here -->


@endsection