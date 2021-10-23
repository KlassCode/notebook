<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list all contacts for user connected
        // $user = auth()->user();
        // $contacts = Contact::where('user_id', '=', $user->id)->latest()->get();
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation 
        $request->validate([
            'name'=> 'required|max:255',
            'phone'=>'required|unique:contacts|Regex:#^[0-9]{8}$#',
            'email'=>'required|unique:contacts',
          ]);

        //Add new Contact
        $contact = new Contact([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email')
        ]);

        $contact->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show the contact
        $contact = Contact::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        //update the contact
        $contact = Contact::find($id);
        $contact->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destroy the contact
        $contact = Contact::find($id);
        $contact->delete();
    }
}
