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

        // dd($Anglais_slide);
    	return view('Internaute.accueil',compact('flash', 'Anglais_slide', 'AvouslHonneur_slide', 'Reportage_slide', 'Lecondevie_slide'));
    }
}
