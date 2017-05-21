<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Formation;
use App\Comment;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
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
        $this->validate($request,
            [
                'content' => 'required|min:10',
            ],
            [
                'content.required' => 'Le contenu est requis'
            ]);

        $input = $request->input();
        $input['user_id'] = Auth::user()->id;
        $post = new Post;

        $post->fill($input)->save();
        $id = $input['formation_id'];
        return redirect()->route('formation.show', compact('id'))
            ->with('success', 'Votre post a bien été envoyé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $posts = Post::paginate(5);
        $comments = Comment::all();
        $comment = Comment::find($id);

        return view('posts.show', compact('comments', 'comment', 'post','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $formation = Formation::find($id);
        return view('posts.edit', compact('post', 'formation'));
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
            'content' => 'required|min:10',
        ],
            [
                'content.required' => 'Le contenu est requis'
            ]);
        $post = Post::find($id);
        $input = $request->input();

        $post->fill($input)->save();
        $formation_id = $request->formation_id;
        return redirect()->route('formation.show', compact('formation_id'))
            ->with('success', 'Le post a bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return Redirect::back()
            ->with('success', 'Le post a bien été supprimé !');
    }
}
