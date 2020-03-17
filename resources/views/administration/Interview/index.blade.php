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

    <div class="six wide column">
        <h4 class="ui center aligned icon header"><i class="video icon"></i>Video </h4>
        <div class="ui items">

            @if (count($Interviews)>0) @foreach($Interviews as $Interview)
				@if ($Interview->video_url != null)
            <div class="item">
                <div class="image">
                	<iframe width="180" height="140" src="{{$Interview->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                </div>
            </div>
				@endif
            @endforeach @else
            <h4 class="ui medium header red center aligned"> Aucune interview postée (Vidéo) !!!</h2>
	@endif

</div>
  </div>

  <div class="six wide column">
  	<h4 class="ui center aligned icon header"><i class="microphone icon"></i>Audio </h4>
            <div class="ui items">

 @if (count($Interviews)>0) @foreach($Interviews as $Interview)
				@if ($Interview->audio_url != null)
            <div class="item">
                <div class="image">
                	<iframe width="180" height="140" src="{{$Interview->audio_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                </div>
            </div>
				@endif
            @endforeach @else
            <h4 class="ui medium header red center aligned"> Aucune interview postée (Audio) !!!</h2>
	@endif
           
            </div>
        </div>

    </div>
    @endsection