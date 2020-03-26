@extends('layouts.sidebar-profil') @section('content')



    <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
                <!--Site Content-->
                <!--Site Content-->
            
                        <div class="row">
                            <div class="ten wide column">
                                        <div class="ui segments">
                                    <div class="ui segment">
                                        <h5 class="ui header">
                                            Ajouter un article
                                        </h5>
                                        <a href="{{route('publications.index')}}">
                                            <button class="ui lightbrownli  button">Voir la liste</button>
                                        </a>
                                    </div>
                                    <form class="ui form segment form3" enctype="multipart/form-data" action="{{route('publications.update', $Publication)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Titre de l'article</label>
                                                <input value="{{$Publication->libelle}}" name="libelle" type="text">
                                               
                                            </div>
                                             <div class="field">
                                                <label>Categories <strong class="text-warning">(Choix précédent : {{$Publication->typePublication->libelle}} ) </strong></label>
                                                <div class="ui dropdown selection" tabindex="0">
                                                    <select name="type_publication_id">
                                                        @foreach($publication_filtrer as $pub)
                                                        <option value="">Categories</option>
                                                        <option value="{{$pub->id}}">{{$pub->libelle}}</option>
                                                        @endforeach
                                                    </select><i class="dropdown icon"></i>
                                                    <div class="default text">Categories</div>
                                                    <div class="menu" tabindex="-1">
                                                        @foreach($publication_filtrer as $pub)
                                                            <div class="item" data-value="{{$pub->id}}">{{$pub->libelle}}</div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @error('type_publication_id')
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
                                                <label>Auteur <strong class="text-warning">(Choix précédent : {{$Publication->Auteur->nom}} {{$Publication->Auteur->prenom}}) </strong></label>
                                                <div class="ui dropdown selection" tabindex="0">
                                                    <select name="auteur_id">
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
                                                <label>image <strong class="text-warning">(facultatif)</strong></label>
                                                <input placeholder="image" name="image" type="file">
                                                @error('image')
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
                                            <label>contenu</label>
                                            <div class="field">
                                                <textarea class="trumbowygeditor" name="contenu" value="{!! $Publication->contenu !!}"> {!! $Publication->contenu !!}</textarea>
                                            </div>
                                        <button type="submit" class="ui blue submit button">Mettre à jour</button>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div>



@endsection