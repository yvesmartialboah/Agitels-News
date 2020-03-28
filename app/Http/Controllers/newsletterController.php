<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ListMessageletter;
use App\Models\newsletter;
use Session;
use Mail;
use DB;

class newsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletter = newsletter::OrderBy('id','desc')->get();
        // dd($flash);
        return view('administration.Newsletter.index',compact('newsletter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.Newsletter.create');
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
           'email' =>'Required|min:3',
        ]);

        newsletter::create([
        'email'=>$request->email,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function list_messages(Request $request)
    {
        $ListMessageletter = ListMessageletter::OrderBy('id','desc')->get();
        return view('administration.Newsletter.list', compact('ListMessageletter'));
    }

    /**
     * all a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
         // Create an array element
        $contacts = newsletter::select('email')->get();

         $contactList = [];
         $i=0;

        // Fill the array element
        foreach($contacts as $contact){
            $contactList[$i] = $contact->email;
            $i++;
        }

        $data = array(
            "messages"=>$request->messages
         );
        $emails = $contactList;

        Mail::send('administration.emails.newsletter', $data, function($message) use ($emails)
        {
            $message->from("yvesmartialboah@gmail.com", "L'agitélien");
            $message->to($emails)->subject('Informations');
        });

        ListMessageletter::create([
            'content'=>$request->messages,
        ]);

        Session()->flash('create', 'Votre mail à été transmit à Tous les abonnés !'); 
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
