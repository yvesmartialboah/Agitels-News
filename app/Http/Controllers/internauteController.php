<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\typePublication;
use App\Models\typeInterview;
use App\Models\Publication;
use App\Models\Interview;
use App\Models\Auteur;
use App\Models\Flash;

class internauteController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function accueil()
    {
    	$flash = Flash::OrderBy('id','desc')->get();
    	$Anglais_slide = Publication::with('typePublication','Auteur')->where('type_publication_id',7)->OrderBy('id','desc')->take(1)->first();
        $AvouslHonneur_slide = Publication::with('typePublication','Auteur')->where('type_publication_id',4)->OrderBy('id','desc')->take(1)->first();
        $Reportage_slide = Publication::with('typePublication','Auteur')->where('type_publication_id',2)->OrderBy('id','desc')->take(1)->first();
        $Lecondevie_slide = Publication::with('typePublication','Auteur')->where('type_publication_id',5)->OrderBy('id','desc')->take(1)->first();
        $Interview_present = Interview::with('typeInterview','Auteur')->OrderBy('id','desc')->take(3)->get();
        $PortailEntreprise = Publication::with('typePublication','Auteur')->where('type_publication_id',8)->OrderBy('id','desc')->take(3)->get();
        $Anglais = Publication::with('typePublication','Auteur')->where('type_publication_id',7)->OrderBy('id','asc')->take(6)->get();
        $Affairage = Publication::with('typePublication','Auteur')->where('type_publication_id',3)->OrderBy('id','asc')->take(6)->get(); 
        $Portrait = Publication::with('typePublication','Auteur')->where('type_publication_id',1)->OrderBy('id','asc')->take(3)->get();
        $JeuxetHumour = Publication::with('typePublication','Auteur')->where('type_publication_id',6)->OrderBy('id','desc')->take(4)->get();

        // Comptage des rubriques
        // -- Début
        $Pub1 = count(Publication::where('type_publication_id',1)->get());
        $Pub2 = count(Publication::where('type_publication_id',2)->get());
        $Pub3 = count(Publication::where('type_publication_id',3)->get());
        $Pub4 = count(Publication::where('type_publication_id',4)->get());
        $Pub5 = count(Publication::where('type_publication_id',5)->get());
        $Pub6 = count(Publication::where('type_publication_id',6)->get());
        $Pub7 = count(Publication::where('type_publication_id',7)->get());
        $Pub8 = count(Publication::where('type_publication_id',8)->get());
        // -- Fin

        // dd($Pub1);
    	return view('Internaute.accueil',compact('flash', 'Anglais_slide', 'AvouslHonneur_slide', 'Reportage_slide', 'Lecondevie_slide', 'Interview_present', 'PortailEntreprise', 'Anglais', 'Affairage', 'Portrait', 'JeuxetHumour','Pub1', 'Pub2', 'Pub3', 'Pub4', 'Pub5', 'Pub6', 'Pub7', 'Pub8'));
    }
}
