<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $posts=Post::orderBy('created_at','desc')->get();
    return view('posts.index')->with('posts',$posts);
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image' => 'image|nullable|max:1999'
            ]);

            //handle file upload
        if($request->hasFile('cover_image')){
            // get file name with extensions
            $filenameWithExt = $request->file('cover_image')->getClientOriginalExtension();
            // only file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // only ext of file
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // fileName to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload img
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }
            // create new post
            $post=new Post;
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            $post->cover_image = $fileNameToStore;
            $post->save();

            return redirect('/posts')->with('success','Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $post=Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit')->with('post',$post);    }

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
            'title'=>'required',
            'body'=>'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        //handle file upload
        if($request->hasFile('cover_image')){
            // get file name with extensions
            $filenameWithExt = $request->file('cover_image')->getClientOriginalExtension();
            // only file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // only ext of file
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // fileName to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload img
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

            $post=Post::find($id);
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            if($request->hasFile('cover_image')){
                $post->cover_image = $fileNameToStore;
            }
            $post->save();

            return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        if($post->cover_image !='noimage.jpg'){
            //Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('/posts')->with('success','Post Removed');
    
    }
}
