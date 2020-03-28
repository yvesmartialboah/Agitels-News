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
                                            Liste des infos 
                                        </h5>
                                        <a href="{{route('news.create')}}">
                                            <button class="ui lightbrownli  button">Envoyer un mail à tous les abonnés</button>
                                        </a>
                                        @if(session()->has('create'))
                                            <div class="ui icon message inverted greenli">
                                                <i class="alarm icon"></i>
                                                <div class="content">
                                                    <div class="header">
                                                        {{ session()->get('create') }}
                                                    </div>
                                                    <!-- <p>{{ session()->get('create') }}</p> -->
                                                </div>
                                            </div>
                                        @endif 

                                         @if(session()->has('delete'))
                                            <div class="ui icon message inverted redli">
                                                <i class="alarm icon"></i>
                                                <div class="content">
                                                    <div class="header">
                                                        {{ session()->get('delete') }}
                                                    </div>
                                                    <!-- <p>{{ session()->get('delete') }}</p> -->
                                                </div>
                                            </div>
                                        @endif 

                                        @if(session()->has('update'))
                                            <div class="ui icon message inverted greenli">
                                                <i class="alarm icon"></i>
                                                <div class="content">
                                                    <div class="header">
                                                        {{ session()->get('update') }}
                                                    </div>
                                                    <!-- <p>{{ session()->get('update') }}</p> -->
                                                </div>
                                            </div>
                                        @endif


                                    </div>
                                    <div class="ui segment">
                                        <table id="data_table" class="ui compact selectable striped celled table tablet stackable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Date de publication</th>
                                                    <!-- <th>Modifier</th>
                                                    <th>Supprimer</th> -->
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($newsletter as $Pub)
                                                <tr>
                                                    <td>{{$Pub->email}}</td>
                                                    <td>
                                                        {{date('d-m-Y', strtotime($Pub->created_at)) }}
                                                    </td>
                                                  <!--   <td> 
                                                        <a href="{{route('flash.edit',$Pub->id)}}">
                                                            <button class="ui brown button">
                                                                <i class="pencil alternate icon ui dark"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action = "{{ route('flash.destroy',$Pub) }}"
                                                            method = "POST"
                                                            onsubmit = "return confirm('Êtes vous sûre ?')"; >
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button class="ui red button" type="submit">
                                                                <i class="close icon ui dark"></i>
                                                            </button>
                                                        </form>
                                                    </td> -->
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