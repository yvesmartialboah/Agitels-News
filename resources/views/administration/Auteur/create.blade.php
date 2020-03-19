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
                                            Ajouter un auteur
                                        </h5>
                                        <a href="{{route('auteurs.index')}}">
                                            <button class="ui lightbrownli  button">Voir la liste</button>
                                        </a>
                                    </div>
                                    <form class="ui form segment form3" action="{{route('auteurs.store')}}" method="POST">
                                    	{{csrf_field()}}
				  							 @csrf
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Nom</label>
                                                <input placeholder="nom" name="nom" type="text">
                                                @error('nom')
                                                <div class="ui redli message">
                                                    <i class="close icon"></i>
                                                    <div class="header">
                                                        Veuillez renseinger ce champs
                                                    </div>
                                                </div>
                                                @enderror
                                               
                                            </div>
                                             <div class="field">
                                                <label>Prenom</label>
                                                <input placeholder="prenom" name="prenom" type="text">
                                                @error('prenom')
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
                                                <label>Contact</label>
                                                <input placeholder="contact" name="contact" type="number">
                                                @error('contact')
                                                <div class="ui redli message">
                                                    <i class="close icon"></i>
                                                    <div class="header">
                                                        Veuillez renseinger ce champs
                                                    </div>
                                                </div>
                                                @enderror
                                            </div>
                                             <div class="field">
                                                <label>Filiere</label>
                                                <input placeholder="filiere" name="filiere" type="text">
                                                @error('filiere')
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
                                                <label>Fonction</label>
                                                <input placeholder="fonction" name="fonction" type="text">
                                                @error('fonction')
                                                <div class="ui redli message">
                                                    <i class="close icon"></i>
                                                    <div class="header">
                                                        Veuillez renseinger ce champs
                                                    </div>
                                                </div>
                                                @enderror
                                            </div>
                                             <div class="field">
                                                <label>date de création</label>
                                                <input value="{{date('d-m-Y', strtotime(NOW()))}}" type="text" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Adresse Mail</label>
                                            <input name="email" placeholder="Adresse Mail" type="email">
                                            @error('email')
                                                <div class="ui redli message">
                                                    <i class="close icon"></i>
                                                    <div class="header">
                                                        Veuillez renseinger ce champs
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="ui blue submit button">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div>



@endsection