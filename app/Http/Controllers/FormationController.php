<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
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
        $formations = Formation::orderBy('id', 'DESC')->paginate(5);
        return view('formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formations.create');
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
        $formation = new Formation;

        $formation->fill($input)->save();
        return redirect()->route('formation.index')
            ->with('success', 'L\'article a bien été publié !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formation = Formation::find($id);
        $posts = Post::all();
        $post = Post::find($id);

        return view('formations.show', compact('formation', 'posts', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation = Formation::find($id);
        return view('formations.edit', compact('formation'));
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
        $formation = Formation::find($id);
        $input = $request->input();


        $formation->fill($input)->save();
        return redirect()->route('formation.show', compact('id'))
            ->with('success', 'L\'article a bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formation = Formation::find($id);
        $formation->delete();
        return redirect()->route('formation.index')
            ->with('success', 'L\'article a bien été supprimé !');
    }
}
