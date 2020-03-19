<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\typeInterview;
use App\Models\Interview;
use App\Models\Auteur;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Interviews = Interview::with('typeInterview','Auteur')->OrderBy('id','desc')->get();
        // dd($Interviews);
        return view('administration.Interview.index',compact('Interviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeInterview = typeInterview::OrderBy('id','desc')->get();
        $Auteur = Auteur::OrderBy('id','desc')->get();
        return view('administration.Interview.create',compact('typeInterview', 'Auteur'));
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
           'description'=>'Required'
           // 'type_interview_id'=>'Required',
           // 'auteur_id'=>'Required',
        ]);

        Interview::create([
        'libelle'=>$request->libelle,
        'description'=>$request->description,
        'audio_url'=>$request->audio_url,
        'video_url'=>$request->video_url,
        'type_interview_id'=>$request->type_interview_id,
        'auteur_id'=>$request->auteur_id,
        'statut'=>$request->statut,
        ]);
        Session()->flash("create", "L'interview à été Ajouté avec success !"); 
        return redirect()->route('interviews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Interview=Interview::findOrFail($id);
        return view('administration.Interview.show',compact('Interview'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeInterview = typeInterview::OrderBy('id','desc')->get();
        $Auteur = Auteur::OrderBy('id','desc')->get();
        $Interview=Interview::findOrFail($id);
        return view('administration.Interview.edit',compact('Interview','typeInterview','Auteur'));
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
           'description'=>'Required'
           // 'type_interview_id'=>'Required',
           // 'auteur_id'=>'Required',
        ]);

        $Interview=Interview::findOrFail($id);
        $Interview->update([
        'libelle'=>$request->libelle,
        'description'=>$request->description,
        'audio_url'=>$request->audio_url,
        'video_url'=>$request->video_url,
        'type_interview_id'=>$request->type_interview_id,
        'auteur_id'=>$request->auteur_id,
        'statut'=>$request->statut,
        ]);
        Session()->flash("update", "L'interview à été mis à jour avec success !"); 
        return redirect()->route('interviews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Interview::destroy($id);
        Session()->flash("delete", "L'Interview à été supprimé avec success !");  
        return redirect()->route('interviews.index');
    }
}
