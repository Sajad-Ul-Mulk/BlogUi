<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use App\Models\Scopes\DraftScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{

    public function index()
    {
        return view('blog_ui.dashboard', [
            'posts' => Post::withoutGlobalScope(DraftScope::class)
                    ->with('category','user')
                    ->paginate(6),
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Author $author)
    {
        //
    }


    public function edit($id)
    {
        if (!Gate::allows('is_admin')) return redirect()->back();

        $post = Post::withoutGlobalScope(DraftScope::class)
            ->where('id', $id)
            ->update(['draft'=>0]);
        if($post)
            return redirect('posts');
        else
            return redirect()->back();


    }


    public function update(Request $request, Author $author)
    {

    }


    public function destroy(Author $author)
    {
        //
    }
}
