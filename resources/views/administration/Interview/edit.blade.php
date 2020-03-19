@extends('layouts.sidebar-profil') @section('content')



    <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
                <!--Site Content-->
                <!--Site Content-->

                    <div class="row">
                        &nbsp; &nbsp; &nbsp;
                        <a href="{{route('interviews.index')}}">
                            <button class="ui lightbrownli  button">Voir la liste</button>
                        </a>
                    </div>
            
                        <div class="row">
                            <div class="sixteen wide tablet nine wide computer column">
                        <div class="ui segments">
                            <div class="ui segment">
                                        <h5 class="ui header">
                                            Ajouter une interview 
                                            @if($Interview->statut == "video")
                                            <strong class="text-warning">Video</strong>
                                            @else
                                            <strong class="text-warning">Audio</strong>
                                            @endif
                                        </h5>
                                        <a href="{{route('interviews.index')}}">
                                            <button class="ui lightbrownli  button">Voir la liste</button>
                                        </a>
                                    </div>
                                    <form class="ui form segment form3" enctype="multipart/form-data" action="{{route('interviews.update', $Interview)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Titre de l'interview</label>
                                                <input placeholder="Titre de l'interview" value="{{$Interview->libelle}}" name="libelle" type="text" required>
                                               @error('libelle')
                                                <div class="ui redli message">
                                                    <i class="close icon"></i>
                                                    <div class="header">
                                                        Veuillez renseinger ce champs
                                                    </div>
                                                </div>
                                                @enderror
                                            </div>
                                             <div class="field">
                                                <label>Categories <strong class="text-warning">(Choix précédent: {{$Interview->typeInterview->libelle}} )</strong></label>
                                                <div class="ui dropdown selection" tabindex="0">
                                                    <select name="type_interview_id" required>
                                                        @foreach($typeInterview as $pub)
                                                        <option value="">Categories</option>
                                                        <option value="{{$pub->id}}">{{$pub->libelle}}</option>
                                                        @endforeach
                                                    </select><i class="dropdown icon"></i>
                                                    <div class="default text">Categories</div>
                                                    <div class="menu" tabindex="-1">
                                                        @foreach($typeInterview as $pub)
                                                            <div class="item" data-value="{{$pub->id}}">{{$pub->libelle}}</div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @error('type_interview_id')
                                                <div class="ui redli message">
                                                    <i class="close icon"></i>
                                                    <div class="header">
                                                        Veuillez renseinger ce champs
                                                    </div>
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Auteur <strong class="text-warning">(Choix précédent: {{$Interview->Auteur->nom}} {{$Interview->Auteur->prenom}} )</strong></label>
                                                <div class="ui dropdown selection" tabindex="0">
                                                    <select name="auteur_id" required>
                                                        @foreach($Auteur as $pub)
                                                        <option value="">Auteur</option>
                                                        <option value="{{$pub->id}}">{{$pub->nom}} {{$pub->prenom}}</option>
                                                        @endforeach
                                                    </select><i class="dropdown icon"></i>
                                                    <div class="default text">Auteur</div>
                                                    <div class="menu" tabindex="-1">
                                                        @foreach($Auteur as $pub)
                                                            <div class="item" data-value="{{$pub->id}}">{{$pub->nom}} {{$pub->prenom}}</div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @error('auteur_id')
                                                <div class="ui redli message">
                                                    <i class="close icon"></i>
                                                    <div class="header">
                                                        Veuillez renseinger ce champs
                                                    </div>
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="field">
                                                @if($Interview->statut == "video")
                                                <label>Url Vidéo <strong class="text-warning"> (embed) </strong></label>
                                                <div class="ui labeled input fluid">
                                                    <div class="ui label">
                                                        http://
                                                    </div>
                                                <input name="video_url" type="url" required value="{{$Interview->video_url}}">
                                                <input name="statut" value="video" type="hidden">
                                                </div>
                                                @else
                                                <label>Url Audio <strong class="text-warning"> (embed) </strong></label>
                                                <div class="ui labeled input fluid">
                                                    <div class="ui label">
                                                        http://
                                                    </div>
                                                <input name="audio_url" type="url" required value="{{$Interview->audio_url}}">
                                                <input name="statut" value="audio" type="hidden">
                                                </div>
                                                @endif

                                               
                                                @error('video_url')
                                                <div class="ui redli message">
                                                    <i class="close icon"></i>
                                                    <div class="header">
                                                        Veuillez renseinger ce champs
                                                    </div>
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                      
                                        <div class="field">
                                            <label>Description</label>
                                            <div class="field">
                                                <textarea class="trumbowygeditor" name="description">{!! $Interview->description !!}</textarea>
                                            </div>
                                        <button type="submit" class="ui blue submit button">Enregistrer</button>
                                    </form>
                        </div>
                    </div>
                        </div>
            </div>
        </div>



@endsection