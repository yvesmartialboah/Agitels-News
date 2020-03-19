<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flash;

class FlashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flash = Flash::OrderBy('id','desc')->get();
        // dd($flash);
        return view('administration.Flash.index',compact('flash'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.Flash.create');
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
           'flashinfo'=>'Required',
        ]); 

        Flash::create([
        'flashinfo'=>$request->flashinfo
        ]);
        Session()->flash('create', 'Le Flash info à été Ajouté avec success !'); 
        return redirect()->route('flash.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flash=Flash::findOrFail($id);
        return view('administration.Flash.show',compact('flash'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flash=Flash::findOrFail($id);
        return view('administration.Flash.edit',compact('flash'));
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
           'flashinfo'=>'Required',
        ]); 

        $flash=Flash::findOrFail($id);
        $flash->update([
        'flashinfo'=>$request->flashinfo
        ]);
        Session()->flash('update', 'Le Flash info à été Ajouté avec success !'); 
        return redirect()->route('flash.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Flash::destroy($id);
        Session()->flash("delete", "Le flashinfo à bien été supprimé avec success !");  
        return redirect()->route('flash.index');
    }
}
