@extends('layouts.app-sem') @section('content')

<br>

<div class="ui equal width grid container">
    <div class="ten wide column">
        <div class="ui segment">
            <h2 class="ui center aligned icon header"></i>Interview </h2>
        </div>
    </div>
</div>
        
        <div class="ui grid">
        <h4 class="icon header"><i class="video icon"></i>Liste des interviews </h4>
        </div>

        <div class="ui grid">


            @foreach($Interviews as $Interview)
    <div class="six wide column">
        <div class="ui items">

            <div class="item">
                <div class="image ui instant move reveal">
                    @if($Interview->video_url != null)
                    <iframe width="180" height="200" src="{{$Interview->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else 
                    <iframe width="180" height="200" scrolling="no" frameborder="no" allow="autoplay" src="{{$Interview->audio_url}}"></iframe>
                    @endif
                </div>
                <div class="content">
                    <a class="header">{{$Interview->libelle}}</a>
                    <div class="meta">
                        <span>posté le : {{date('d-m-Y', strtotime($Interview->created_at)) }} </span>
                    </div>
                    <div class="description">
                        <p>{{$Interview->description}}</p>
                    </div>
                    <div class="extra">Type : {{$Interview->typeInterview->libelle}} </div>
                    <div class="extra">Auteur : {{$Interview->Auteur->nom}} {{$Interview->Auteur->prenom}} </div>
                    <!-- <div class="extra">Modifier : <a href="" class="ui blue"><i class="pencil alternate icon"></i></a> |                  Supprimer : <a href="" class="ui red"><i class="close icon ui red"></i></a>
                    </div> -->
                    <div class="extra">
                         <div class="ui grid">
                            <div class="seven wide column">
                                <a href="{{route('interview.edit',$Interview->id)}}">
                                     <button class="circular ui icon button">
                                  Modifier :   <i class="close icon ui blue"></i>
                                </button>
                                 </a>
                            </div> 

                            <div class="seven wide column">
                                <form action = "{{ route('interview.destroy',$Interview) }}"
                                    method = "POST"
                                    onsubmit = "return confirm('Êtes vous sûre ?')"; >
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="circular ui icon button" type="submit">
                                      Supprimer :   <i class="close icon ui red"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

</div>

  </div>

 @endforeach
            
         
    </div>
 </div>

<div class="ui equal width grid container">
    <div class="ten wide column">
            <div class="ui buttons right floated">
              <a href="{!! $Interviews->previousPageUrl() !!}">
                <button class="ui labeled icon button"><i class="left chevron icon"></i> Revenir </button>
              </a>
              <button class="ui button">Page {!! $Interviews->currentPage() !!}/{!! $Interviews->total() !!}</button>
              <a href="{!! $Interviews->nextPageUrl() !!}">
                <button class="ui right labeled icon button">Suivant <i class="right chevron icon"></i> </button>
              </a>
            </div>

            <!-- Pagination -->
    </div>
</div>
    @endsection