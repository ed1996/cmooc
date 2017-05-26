<?php

namespace App\Http\Controllers;

use App\Cour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $court = Cour::orderBy('id', 'DESC')->paginate(5);
        return view('cour.index', compact('court'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|min:3',
                'content' => 'required|min:10',
            ],
            [
                'title.required' => 'Le titre est requis',
                'content.required' => 'Le contenu est requis'
            ]);

        $input = $request->input();

        $input['user_id'] = Auth::user()->id;
        $cour = new Cour;

        $cour->fill($input)->save();
        return redirect()->route('cour.index')
            ->with('success', 'Le cours a bien été publié !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cour = Cour::find($id);

        return view('cour.show', compact('cour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cour = Cour::find($id);
        return view('cour.edit', compact('cour'));
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
        $this->validate($request, [
            'title' => 'required|min:3',
            'content' => 'required|min:10',
        ],
            [
                'title.required' => 'Le titre est requis',
                'content.required' => 'Le contenu est requis'
            ]);
        $cour = Cour::find($id);
        $input = $request->input();


        $cour->fill($input)->save();
        return redirect()->route('cour.show', compact('id'))
            ->with('success', 'Le cours a bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cour = Cour::find($id);
        $cour->delete();
        return redirect()->route('cour.index')
            ->with('success', 'Le cours a bien été supprimé !');
    }
}
