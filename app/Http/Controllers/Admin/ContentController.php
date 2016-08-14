<?php

namespace App\Http\Controllers\Admin;

use App\NewsPost;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function index()
    {
        $posts = NewsPost::with('category')->latest()->paginate(10);

        return view('admin.content_table')->with(compact('posts'));
    }


    public function create()
    {
        $categories = Category::get();

        return view('admin.form_new_content')->with(compact('categories'));
    }

    public function store(Request $request)
    {
        NewsPost::create([
            'title' => $request->input('title'),
            'article_text' => $request->input('article_text'),
            'category_id' => $request->input('category'),
        ]);

        return redirect('admin/content');
    }

    public function edit($id)
    {
        $categories = Category::get();

        $post = NewsPost::find($id);

        return view('admin.form_edit_content')
                    ->with(compact('categories'))
                    ->with(compact('post'));
    }

    public function save($id)
    {
        $post = NewsPost::find($id);

        $post->title = request()->input('title');
        $post->article_text = request()->input('article_text');
        $post->category_id = request()->input('category');

        $post->save();

        return redirect('admin/content');
    }

    public function delete($id)
    {
        $post = NewsPost::find($id);

        $post->delete();

        return redirect('admin/content');
    }
}
