<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact();
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;

        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'content' => 'required'
            ]);


        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->content = $request->content;

        $contact
            ->fill($input)
            ->save();

        return redirect()->route('contact')
            ->with('message', 'Merci de nous avoir contacté, nous vous contacterons en retour le plus vite possible !');
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

}
