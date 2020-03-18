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
                                            Liste des articles 
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
                                                    <th>Libelle de l'article</th>
                                                    <th>Date de publication</th>
                                                    <th>Description</th>
                                                    <th>Type d'article</th>
                                                    <th>Auteur</th>
                                                    <th>Modifier</th>
                                                    <th>Supprimer</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($Publication as $Pub)
                                                <tr>
                                                    <td>{{$Pub->libelle}}</td>
                                                    <td>
                                                        {{date('d-m-Y', strtotime($Pub->created_at)) }}
                                                    </td>
                                                    <td>
                                                        <img class="ui small image" src="{{$Pub->image}}" alt="">
                      									<br>
                                                        <!-- {{$Pub->description}} -->
                                                        {!! Str::limit($Pub->contenu, 450, ' ...') !!}
                                                    
                                                       <br> 
                                                    </td>
                                                    <td>{{$Pub->typePublication->libelle}}</td>
                                                    <td>{{$Pub->Auteur->nom}} {{$Pub->Auteur->prenom}}</td>
                                                    <td> 
                                                        <a href="{{route('publications.edit',$Pub->id)}}">
                                                            <button class="ui brown button">
                                                                <i class="pencil alternate icon ui dark"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action = "{{ route('publications.destroy',$Pub) }}"
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