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
                                    <form class="ui form segment form3" enctype="multipart/form-data" action="{{route('publications.store')}}" method="POST">
                                    	{{csrf_field()}}
				  							 @csrf
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Titre de l'article</label>
                                                <input placeholder="Titre de l'article" name="libelle" type="text">
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
                                                <label>Categories</label>
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
                                                <label>Auteur</label>
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
                                                <label>image</label>
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
                                                <textarea class="trumbowygeditor" name="contenu"></textarea>
                                            </div>
                                        <button type="submit" class="ui blue submit button">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
            </div>
        </div>



@endsection