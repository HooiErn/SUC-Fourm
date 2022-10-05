<?php

namespace App\Http\Controllers\Pages;

use App\Models\Tag;
use App\Models\Thread;
use App\Models\Category;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        return view('pages.tags.index', [
            'threads'       => Thread::ForTag($tag->slug())->paginate(10),
        ]);
    }
    
    public function create()
    {
        return view('tags.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => ['required', 'unique:tags']
        ]);

        Tag::create([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
        ]);

        return redirect()->route('tags.index')->with('success', 'Tag Created');
        
    }

}
