<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Publication;
use App\Models\Interview;
use App\Models\Auteur;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $derniers_posts= Publication::OrderBy('id','desc')->take(2)->get();
        $last_interview_posts= Interview::OrderBy('id','desc')->take(2)->get();
        $Publication = Publication::All();
        $Interview = Interview::All();
        $Auteur = Auteur::All();

        $count_Pub = count($Publication); // Nombre des articles publiés.
        $count_Int = count($Interview); // Nombre des interviews effectués.
        $count_Auth = count($Auteur); // Nombre des auteurs enregistrés.

        return view('home',compact('count_Pub', 'count_Int', 'count_Auth','derniers_posts', 'last_interview_posts'));
    }
}
