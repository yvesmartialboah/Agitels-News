<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
        $Pub1 = count(Publication::where('type_publication_id',1)->get()); // Portrait
        $Pub2 = count(Publication::where('type_publication_id',2)->get()); // Reportage
        $Pub3 = count(Publication::where('type_publication_id',3)->get()); // Affairage
        $Pub4 = count(Publication::where('type_publication_id',4)->get()); // À vous l'honneur
        $Pub5 = count(Publication::where('type_publication_id',5)->get()); // Leçon de vie
        $Pub6 = count(Publication::where('type_publication_id',6)->get()); // Jeux et humour
        $Pub7 = count(Publication::where('type_publication_id',7)->get()); // Anglais
        $Pub8 = count(Publication::where('type_publication_id',8)->get()); // Portail des entreprises
        // -- Fin

        // dd($Pub1);
    	return view('Internaute.accueil',compact('flash', 'Anglais_slide', 'AvouslHonneur_slide', 'Reportage_slide', 'Lecondevie_slide', 'Interview_present', 'PortailEntreprise', 'Anglais', 'Affairage', 'Portrait', 'JeuxetHumour','Pub1', 'Pub2', 'Pub3', 'Pub4', 'Pub5', 'Pub6', 'Pub7', 'Pub8'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function view_article($id)
    {
         // Comptage des rubriques
        // -- Début
        $Pub1 = count(Publication::where('type_publication_id',1)->get()); // Portrait
        $Pub2 = count(Publication::where('type_publication_id',2)->get()); // Reportage
        $Pub3 = count(Publication::where('type_publication_id',3)->get()); // Affairage
        $Pub4 = count(Publication::where('type_publication_id',4)->get()); // À vous l'honneur
        $Pub5 = count(Publication::where('type_publication_id',5)->get()); // Leçon de vie
        $Pub6 = count(Publication::where('type_publication_id',6)->get()); // Jeux et humour
        $Pub7 = count(Publication::where('type_publication_id',7)->get()); // Anglais
        $Pub8 = count(Publication::where('type_publication_id',8)->get()); // Portail des entreprises
        // -- Fin

        $flash = Flash::OrderBy('id','desc')->get();
        $Publication = Publication::with('typePublication','Auteur')->OrderBy('id','desc')->findOrFail($id);
        // dd($Publication);
        return view('Internaute.show_publication', compact('Publication', 'flash','Pub1', 'Pub2', 'Pub3', 'Pub4', 'Pub5', 'Pub6', 'Pub7', 'Pub8'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function view_interview($id)
    {
         // Comptage des rubriques
        // -- Début
        $Pub1 = count(Publication::where('type_publication_id',1)->get()); // Portrait
        $Pub2 = count(Publication::where('type_publication_id',2)->get()); // Reportage
        $Pub3 = count(Publication::where('type_publication_id',3)->get()); // Affairage
        $Pub4 = count(Publication::where('type_publication_id',4)->get()); // À vous l'honneur
        $Pub5 = count(Publication::where('type_publication_id',5)->get()); // Leçon de vie
        $Pub6 = count(Publication::where('type_publication_id',6)->get()); // Jeux et humour
        $Pub7 = count(Publication::where('type_publication_id',7)->get()); // Anglais
        $Pub8 = count(Publication::where('type_publication_id',8)->get()); // Portail des entreprises
        // -- Fin
        
        $flash = Flash::OrderBy('id','desc')->get();
        $Interview = Interview::with('typeInterview','Auteur')->OrderBy('id','desc')->findOrFail($id);
        // dd($Interview);
        return view('Internaute.show_interview', compact('Interview','flash','Pub1', 'Pub2', 'Pub3', 'Pub4', 'Pub5', 'Pub6', 'Pub7', 'Pub8'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function list_articles()
    {
        $flash = Flash::OrderBy('id','desc')->get();
        $Publication = Publication::with('typePublication','Auteur')->OrderBy('id','desc')->paginate(6);
        // dd($Publication);
        return view('Internaute.list_articles', compact('Publication','flash'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function list_interview()
    {
        $flash = Flash::OrderBy('id','desc')->get();
        $Interview_present = Interview::with('typeInterview','Auteur')->OrderBy('id','desc')->paginate(6);
        // dd($Interview_present)
        return view('Internaute.list_interview', compact('Interview_present','flash'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function search(Request $request)
    {
        $flash = Flash::OrderBy('id','desc')->get();
        
        $search = $request->get('search');
        $postsInterview = Interview::with('typeInterview','Auteur')->where('libelle','like','%'.$search.'%')->paginate(3);
        $postsPublication= Publication::with('typePublication','Auteur')->where('libelle','like','%'.$search.'%')->paginate(3);

        $collection = collect($postsPublication);
        $merged = $collection->merge($postsInterview);

        //$data = $merged->all();
        //dd($data);

        return view('Internaute.search', compact('flash', 'postsPublication', 'postsInterview'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function contact()
    {
        $flash = Flash::OrderBy('id','desc')->get();
        // dd($flash)
        return view('Internaute.contact', compact('flash'));
    }

}
