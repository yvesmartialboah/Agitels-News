@extends('layouts.sidebar-profil') @section('content')



    <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
                <!--Site Content-->
                <!--Site Content-->
            
                        <div class="row">
                          
                            <!--  -->
                            <!--  -->

                            <div class="ten wide column">
                                        <div class="ui segments">
                                    <div class="ui segment">
                                        <h5 class="ui header">
                                            Envoyer un mail à tous les abonnés
                                        </h5>
                                        <a href="{{route('news.index')}}">
                                            <button class="ui lightbrownli  button">Voir la liste</button>
                                        </a>
                                    </div>
                                    <form class="ui form segment form3" action="{{route('all')}}" method="POST">
                                        {{csrf_field()}}
                                            @csrf
                                        <div class="field">
                                            <label>contenu du Mail</label>
                                            <div class="field">
                                                <!-- <input placeholder="contenu" name="email" type="text"> -->
                                                <textarea class="trumbowygeditor" name="messages" id="" cols="30" rows="5" required="required"></textarea>
                                            </div>
                                        <button type="submit" class="ui blue submit button">Envoyer</button>
                                    </form>
                                </div>
                            </div>

                            <!--  -->

                        </div>
            </div>
        </div>



@endsection