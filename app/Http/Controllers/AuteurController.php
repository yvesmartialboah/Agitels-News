<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auteur;

class AuteurController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Auteur = Auteur::OrderBy('id','desc')->get();
        return view('administration.Auteur.index',compact('Auteur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.Auteur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'nom'=>'Required',
           'prenom'=>'Required',
           'contact'=>'Required'
        ]);

        Auteur::create([
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'contact'=>$request->contact,
        'email'=>$request->email,
        'filiere'=>$request->filiere,
        'fonction'=>$request->fonction
        ]);
        Session()->flash('success', 'Auteur Ajouté avec success !'); 
        return redirect()->route('auteur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Auteur = Auteur::findOrFail($id);
        return view('administration.Auteur.show', compact('Auteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Auteur = Auteur::findOrFail($id);
        return view('administration.Auteur.edit', compact('Auteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
           'nom'=>'Required',
           'prenom'=>'Required',
           'contact'=>'Required'
        ]);

        $Auteur = Auteur::findOrFail($id);
        $Auteur->update([
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'contact'=>$request->contact,
        'email'=>$request->email,
        'filiere'=>$request->filiere,
        'fonction'=>$request->fonction
      ]);
        Session()->flash('success', 'Auteur mis à jour avec success !');    
        return redirect()->route('auteur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auteur::destroy($id);
        Session()->flash('success', 'Auteur Supprimé avec success !');  
        return redirect()->route('auteur.index');
    }
}
