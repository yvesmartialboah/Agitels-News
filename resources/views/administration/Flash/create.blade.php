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
                                            Ajouter une info
                                        </h5>
                                        <a href="{{route('flash.index')}}">
                                            <button class="ui lightbrownli  button">Voir la liste</button>
                                        </a>
                                    </div>
                                    <form class="ui form segment form3" action="{{route('flash.store')}}" method="POST">
                                        {{csrf_field()}}
                                            @csrf
                                        <div class="field">
                                            <label>contenu du flash info</label>
                                            <div class="field">
                                                <!-- <input placeholder="contenu" name="flashinfo" type="text"> -->
                                                <textarea  name="flashinfo" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        <button type="submit" class="ui blue submit button">Enregistrer</button>
                                    </form>
                                </div>
                            </div>

                            <!--  -->

                        </div>
            </div>
        </div>



@endsection