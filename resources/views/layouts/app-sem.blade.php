<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
    <!-- <script src="https://kit.fontawesome.com/98637d73ea.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="{{asset('semantic-ui/semantic.min.css')}}">
    <link rel="stylesheet" href="{{asset('semantic-ui/icon.css')}}">
</head>

<body>

	<div class="ui container inverted top attached menu">
	  <div class="right menu">
	    <div class="item">
	      <div class="ui icon input">
	        <input type="text" placeholder="Rechercher...">
	        <i class="search link icon"></i>
	      </div>
	    </div>
	    <!-- <a class="ui item">---- </a> -->
	  </div>
	</div>

    <div class="ui left demo vertical inverted visible sidebar labeled icon menu">
	  <a class="item">
	    <i class="home icon"></i>
	    Accueil
	  </a>
	  <a class="item">
	    <i class="pencil alternate icon"></i>
	    Ajouter un rédacteur
	  </a> 
	  <a class="item">
	    <i class="newspaper icon"></i>
	    Ajouter un nouvel article
	  </a> 
	  <a class="item">
	    <p><i class="microphone icon"></i>
	    <i class="video icon"></i></p>
	    Ajouter une interview
	  </a>
	  <a class="item">
	    <i class="close icon"></i>
	    Déconnexion
	  </a>
	</div>

    <div class="container pusher">
        <!-- Site content !-->
        @yield('content')
    </div>

    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('semantic-ui/semantic.js')}}"></script>
    <script>
    	function menu(){
	    		$('.ui.labeled.icon.sidebar')
				  .sidebar('toggle')
				;	
    	}
    </script>
</body>

</html>