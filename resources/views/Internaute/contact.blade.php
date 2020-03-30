@extends('layouts.navbar-internaute') @section('content')

         <section class="breadcrumbs-area" style="background-image: url('view/img/banner/breadcrumbs-banner.jpg');">
                <div class="container">
                    <div class="breadcrumbs-content">
                        <h1>Contactez nous</h1>
                        <ul>
                            <li>
                                <a href="{{route('accueil')}}">Accueil</a> -</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </section>


             <section class="bg-body section-space-less30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 mb-30">
                            <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">A Propos du club Journal <strong><i>L'agitélien</i></strong></div>
                            </div>
                            <h2 class="title-semibold-dark size-xl">Qui sommes nous ?</h2>
                            <p class="size-lg mb-40">Une jeunesse ...</p>
                            <div class="google-map-area mb-50">
                                <div style="overflow:hidden;width: 100%;position: relative;"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=Abidjan%20AGITEL%20FORMATION%20Cote%20d%5C'ivoire+(Titre)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/es/">embedgooglemaps ES</a> & <a href="https://lasagradafamiliatickets.de/la-sagrada-familia-ticket/">https://lasagradafamiliatickets.de/la-sagrada-familia-ticket/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                            </div>
                            <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">+ Informations</div>
                            </div>
                            <ul class="address-info">
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>Agitel Formation, Riviera 3, #Côte d'ivoire.</li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>+ 225 57 86 97 30</li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>lagitelien@gmail.com</li>
                                <li>
                                    <i class="fa fa-fax" aria-hidden="true"></i>+ 225 44 34 44 06</li>
                            </ul>
                            <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">Envoyer Nous Un Message</div>
                            </div>
                            <form id="Message" class="contact-form">
                                 {{csrf_field()}}
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                            <input type="text" placeholder="Nom" class="form-control" name="nom" id="nom">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="email" placeholder="Adresse mail" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea placeholder="Message" class="textarea form-control" name="content" id="content" rows="7" cols="20"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                            <div class="form-group mb-none">
                                                <button type="submit" class="btn-ftg-ptp-56 disabled">Envoyer</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                            <div class="form-response"></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                          @include('components.publicite_contact')
                          @include('components.newsletter')
                        </div>
                    </div>
                </div>
            </section>

@endsection