<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(0);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required',
            'id_number' => 'required',
            'ward' => 'required',
            'voting' => 'required',
            'group' => 'required'
        ]);

        //create post
        $post = new Post;
        $post->name = $request->input('name');
        $post->age = $request->input('age');
        $post->id_number = $request->input('id_number');
        $post->ward = $request->input('ward');
        $post->voting = $request->input('voting');
        $post->group = $request->input('group');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('succes','post created');
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
        return view('posts.show')->with('post',$post );
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
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unnathorized Page');
        }
        return view('posts.edit')->with('post',$post );
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
            'name' => 'required',
            'age' => 'required',
            'id_number' => 'required',
            'ward' => 'required',
            'voting' => 'required',
            'group' => 'required'
        ]);

        //create post
        $post = Post::find($id);
        $post->name = $request->input('name');
        $post->age = $request->input('age');
        $post->id_number = $request->input('id_number');
        $post->ward = $request->input('ward');
        $post->voting = $request->input('voting');
        $post->group = $request->input('group');
        $post->save();

        return redirect('/posts')->with('succes','post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unnathorized Page');
        }
        $post->delete();
        return redirect('/posts')->with('succes','post deleted');
    }
}
