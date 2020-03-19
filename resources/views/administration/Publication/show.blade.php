@extends('layouts.sidebar-profil') @section('content')



    <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
                <!--Site Content-->
                <!--Site Content-->
            
                        <div class="row">
                            <div class="sixteen wide column">
                                <br>
                                <a href="{{route('publications.index')}}">
                                    <button class="ui lightbrownli  button">Voir la liste</button>
                                </a>
                                <br>
                            		<img class="ui small image" src="../../image_publication/{{$Publication->image}}" alt="">
                                        {!! $Publication->contenu !!}	
                            </div>
                        </div>
            </div>
        </div>



@endsection