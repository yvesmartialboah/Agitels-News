@extends('layouts.sidebar-profil') @section('content')



    <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
                <!--Site Content-->
                <!--Site Content-->
            
                        <div class="row">
                            <div class="sixteen wide tablet eight wide computer column">
                                <div class="ui segments">
                                    <div class="ui segment">
                                        <h5 class="ui header">
                                            Détail
                                        </h5>
                                        <a href="{{route('interviews.index')}}">
                                            <button class="ui lightbrownli  button">Voir la liste</button>
                                        </a>
                                    </div>
                                    <div class="ui segment">
                    @if($Interview->statut == 'video')
                    <iframe width="100%" height="200" src="{{$Interview->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else 
                    <iframe width="100%" height="200" scrolling="no" frameborder="no" allow="autoplay" src="{{$Interview->audio_url}}"></iframe>
                    @endif
                                    </div>
                                    <div class="ui segment">
                                        <h5 class="ui header">
                                            {!! ($Interview->description) !!}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>



@endsection