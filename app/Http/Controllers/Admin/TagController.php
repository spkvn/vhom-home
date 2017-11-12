<?php

namespace VhomHome\Http\Controllers\Admin;

use Illuminate\Http\Request;
use VhomHome\Models\Tag;
use VhomHome\Http\Controllers\Controller;

class TagController extends Controller
{
    protected $base = 'admin.tag';

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.list')
            ->with('records', $tags)
            ->with('base', $this->base);
    }
    public function create()
    {
        return view('admin.tag.edit')
            ->with('base', $this->base);
    }
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit')
            ->with('record',$tag)
            ->with('base', $this->base);
    }

    public function store(Request $request)
    {
        Tag::create([
            'name' => $request->input('name')
        ]);

        return redirect()
            ->route('admin.tag.index');
    }

    public function update(Tag $tag, Request $request)
    {
        $tag->name = $request->input('name');
        $tag->save();

        return redirect()
            ->route('admin.tag.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()
            ->route('admin.tag.index');
    }

}
