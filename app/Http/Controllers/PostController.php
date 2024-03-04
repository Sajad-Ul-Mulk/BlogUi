<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use JetBrains\PhpStorm\NoReturn;

class PostController extends Controller
{

    public function index()
    {
        return view('blog_ui.index',[
            'posts'=>Post::latest()->with('category')->paginate(6),
        ]);
    }


    public function create()
    {
        return view('blog_ui.posts.create',[
            'categories'=> Category::all(),
        ]);
    }


     public function store(StorePostRequest $request)
    {
//        dd($request);
        $post=$request->validated();

        if($request->hasFile('cover')){
            $post['cover'] = $request->file('cover')->store('covers');
        }


         $post['user_id']=Auth::id();

        Post::create($post);

        return Redirect::route('posts.index');
    }


    public function show(Post $post)
    {
        return view('blog_ui.posts.show',[
            'post'=>$post,
        ]);
    }

    public function edit(Post $post)
    {
        $categories= Category::all();
        if(Gate::allows('is_admin') || Gate::allows('is_author',$post))
            return view('blog_ui.posts.edit',compact('post','categories'));
        return redirect()->back();

    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        if(Gate::allows('is_admin') || Gate::allows('is_author',$post)){
            $updatedPost=$request->validated();
            if($request->hasFile('cover')){
                $updatedPost['cover'] = $request->file('cover')->store('public');
            }
            $post->update($updatedPost);
            return redirect('posts');
        }
        return \redirect()->back();

    }


    public function destroy(Post $post)
    {
        if(!Gate::allows('is_admin'))
            return redirect()->back();
        $post->delete();
        return redirect()->back();
    }

    #[NoReturn] public function search()
    {
        $search=\request('search');
        if(empty($search))
            return \redirect()->back();

        $record = Post::latest()
            ->where('slug', 'like',$search)
            ->get();
        return view('blog_ui.search_result',[
           'posts'=>$record,
            'error'=>'No Record Found...'
        ]);
    }

}

