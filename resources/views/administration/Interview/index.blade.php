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
                                            Liste des Inverviews 
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
                                                @foreach($Interviews as $Interview)
                                                <tr>
                                                    <td>{{$Interview->libelle}}</td>
                                                    <td>
                                                        {{date('d-m-Y', strtotime($Interview->created_at)) }}
                                                    </td>
                                                    <td>
                                                         <a href="{{route('interviews.show', $Interview->id)}}">
                                                            <button class="ui blueli  button">aperçu de l'article</button>
                                                        </a>
             <!--                                            @if($Interview->statut == 'video')
                    <iframe width="100%" height="200" src="{{$Interview->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else 
                    <iframe width="100%" height="200" scrolling="no" frameborder="no" allow="autoplay" src="{{$Interview->audio_url}}"></iframe>
                    @endif
                        <br> -->
                                                        <!-- {{$Interview->description}} -->
                                                        <!-- {!! Str::limit($Interview->description, 450, ' ...') !!} -->
                                                    
                                                       <!-- <br>  -->
                                                    </td>
                                                    <td>{{$Interview->typeInterview->libelle}}</td>
                                                    <td>{{$Interview->Auteur->nom}} {{$Interview->Auteur->prenom}}</td>
                                                    <td> 
                                                        <a href="{{route('interviews.edit',$Interview->id)}}">
                                                            <button class="ui brown button">
                                                                <i class="pencil alternate icon ui dark"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action = "{{ route('interviews.destroy',$Interview) }}"
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