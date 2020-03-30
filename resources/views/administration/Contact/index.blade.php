@extends('layouts.sidebar-profil') @section('content')

<br>


    <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">     

                        <div class="row">
                             <div class="sixteen wide tablet thirteen wide computer column">
                        <div class="ui segments">
                            <div class="ui segment">
                                <h5 class="ui header">
                                    Message reçu des visiteurs du site.
                                </h5>
                            </div>
                            <div class="ui segment">

                                <div class="chat">
                                    <div class="chat-header clearfix">
                                        <img class="ui circular image" src="{{asset('view/img/avatar/people/Abraham.png')}}" alt="avatar"/>

                                        <div class="chat-about">
                                            <div class="chat-with">Liste des Messages reçu</div>
                                            <div class="chat-num-messages">déjà <b>{{ count($Contact) }}</b> messages</div>
                                        </div>
                                        <i class="fa fa-star"></i>
                                    </div> <!-- end chat-header -->

                                    <div class="chat-history">
                                        <ul>
                                           @foreach($Contact as $Pub)
                                            <li>
                                                <div class="message-data">
                                                    <span class="message-data-name"><i class="icon circle online"></i> <b>{{$Pub->nom}} - {{$Pub->email}}</b></span>
                                                    <span class="message-data-time"> {{date('d-m-Y à h:i', strtotime($Pub->created_at)) }}</span>
                                                </div>
                                                <div class="message my-message">
                                                    {{$Pub->content}}
                                                </div>
                                                <i class="icon circle online"></i>
                                                <i class="icon circle online" style="color: #AED2A6"></i>
                                                <i class="icon circle online" style="color:#DAE9DA"></i>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div> <!-- end chat-history -->

                                </div> <!-- end chat -->
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
        </div>
        <!--maincontent-->



@endsection