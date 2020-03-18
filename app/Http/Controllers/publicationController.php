<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\typePublication;
use App\Models\Publication;
use App\Models\Auteur;

class publicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Publication = Publication::with('typePublication','Auteur')->OrderBy('id','desc')->get();
        // dd($Publication);
        return view('administration.Publication.index',compact('Publication'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typePublication = typePublication::OrderBy('id','desc')->get();
        $Auteur = Auteur::OrderBy('id','desc')->get();
        return view('administration.Publication.create',compact('typePublication', 'Auteur'));
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
           'libelle'=>'Required',
           'type_publication_id'=>'Required',
           'auteur_id'=>'Required',
           'contenu'=>'Required'
        ]);

        if($request->image == null){
            $nomAvatar = null;
        }else{
            $image = $request->file('image');
            // Obtenir l'extension
            // dd($image );
            $nomAvatar = time().'.'.$image->getClientOriginalExtension();
            // time() génère un nom aléatoire
            $image->move(public_path("image_publication"), $nomAvatar );
            // $image->move(base_path("image_publication"), $nomAvatar );
        }  

        Publication::create([
        'libelle'=>$request->libelle,
        'type_publication_id'=>$request->type_publication_id,
        'auteur_id'=>$request->auteur_id,
        'image'=>$nomAvatar,
        'contenu'=>$request->contenu
        ]);
        Session()->flash('success', 'La Publication à été Ajouté avec success !'); 
        return redirect()->route('publications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Publication=Publication::findOrFail($id);
        return view('administration.Publication.show',compact('Publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Publication=Publication::findOrFail($id);
        return view('administration.Publication.edit',compact('Publication'));
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
           'libelle'=>'Required',
           'type_publication_id'=>'Required',
           'auteur_id'=>'Required',
           'contenu'=>'Required'
        ]);

        if($request->image == null){

            $Publication=Publication::findOrFail($id);
            $Publication->update([
                'libelle'=>$request->libelle,
                'contenu'=>$request->contenu,
                'type_publication_id'=>$request->type_publication_id,
                'auteur_id'=>$request->auteur_id,
            ]);

        }else{

            $image = $request->file('image');
            // Obtenir l'extension
            // dd($image );
            $nomAvatar = time().'.'.$image->getClientOriginalExtension();
            // time() génère un nom aléatoire
            $image->move(public_path("image_publication"), $nomAvatar );
            // $image->move(base_path("image_publication"), $nomAvatar );
            $Publication=Publication::findOrFail($id);
            // dd($request->libelle);
            $Publication->update([
                'libelle'=>$request->libelle,
                'contenu'=>$request->contenu,
                'image'=>$nomAvatar,
                'type_publication_id'=>$request->type_publication_id,
                'auteur_id'=>$request->auteur_id,
            ]);

        }  
        
        Session()->flash('message', 'La Publication à été mise à jour avec success !'); 
        return redirect()->route('publications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publication::destroy($id);
        Session()->flash("message", "L'article à bien été supprimé avec success !");  
        return redirect()->route('publications.index');
    }
}
