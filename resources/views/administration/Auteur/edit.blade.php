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
                                    </div>
                                    <form class="ui form segment form3" action="{{route('auteurs.update', $Auteur)}}" method="POST">
                                    	{{csrf_field()}}
                            			{{method_field('PUT')}}
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Nom</label>
                                                <input value="{{$Auteur->nom}}" name="nom" type="text" required>
                                            </div>
                                             <div class="field">
                                                <label>Prenom</label>
                                                <input value="{{$Auteur->prenom}}" name="prenom" type="text" required>
                                            </div>
                                        </div>
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Contact</label>
                                                <input value="{{$Auteur->contact}}" name="contact" type="number" required>
                                            </div>
                                             <div class="field">
                                                <label>Filiere</label>
                                                <input value="{{$Auteur->filiere}}" name="filiere" type="text" required>
                                            </div>
                                        </div>
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Fonction</label>
                                                <input value="{{$Auteur->fonction}}" name="fonction" type="text" required>
                                            </div>
                                             <div class="field">
                                                <label>date de création</label>
                                                <input value="{{date('d-m-Y', strtotime(NOW()))}}" type="text" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Adresse Mail</label>
                                            <input name="email" value="{{$Auteur->email}}" type="email" required>
                                        </div>
                                        <button type="submit" class="ui blue submit button">Mettre à Jour</button>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div>



@endsection