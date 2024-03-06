<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\BlogRequest;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(BlogRequest $request)
    {
        $blog = new Blog([
            'user_id' => auth()->user()->id,
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ]);

        $blog->save();

        return redirect('/blogs')->with('success', 'Blog has been added');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->get('title');
        $blog->description = $request->get('description');
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog has been updated');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('/blogs')->with('success', 'Blog has been deleted');
    }
}
