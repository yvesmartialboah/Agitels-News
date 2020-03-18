@extends('layouts.sidebar-profil') @section('content')

<br>


    <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
                <!--Site Content-->
                <!--Site Content-->
            
                        <div class="row">
                            <div class="sixteen wide column">
                                <div class="ui segments">
                                    <div class="ui segment">
                                        <h5 class="ui header">
                                            Liste des Auteurs 
                                        </h5>
                                        @if(session()->has('message'))
                                            <div class="ui icon message inverted redli">
                                                <i class="alarm icon"></i>
                                                <div class="content">
                                                    <div class="header">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                    <!-- <p>{{ session()->get('message') }}</p> -->
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="ui segment">
                                        <table id="data_table" class="ui compact selectable striped celled table tablet stackable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Nom & Prenom</th>
                                                    <th>Contact</th>
                                                    <th>Addresse Mail</th>
                                                    <th>Filière</th>
                                                    <th>Fonction</th>
                                                    <th>Supprimer</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($Auteur as $redacteur)
                                                <tr>
                                                    <td>{{$redacteur->nom}} {{$redacteur->prenom}}</td>
                                                    <td>
                                                        {{$redacteur->contact}}
                                                    </td>
                                                    <td>
                                                        {{$redacteur->email}}
                                                    
                                                    </td>
                                                    <td>{{$redacteur->filiere}}</td>
                                                    <td>{{$redacteur->fonction}}</td>
                                                    <td>
                                                        <form action = "{{ route('auteurs.destroy',$redacteur) }}"
                                                            method = "POST"
                                                            onsubmit = "return confirm('Êtes vous sûre ?')"; >
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button class="ui red button" type="submit">
                                                                <i class="close icon ui dark"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <!--maincontent-->



@endsection