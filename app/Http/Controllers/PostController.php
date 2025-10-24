<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
    return \App\Models\Post::latest()->get();
}
public function store(\Illuminate\Http\Request $r) {
    $d = $r->validate([
        'title'=>'required',
        'content'=>'nullable',
        'published'=>'boolean'
    ]);
    return \App\Models\Post::create($d);
}
public function show(\App\Models\Post $post) { return $post; }
public function update(\Illuminate\Http\Request $r,\App\Models\Post $post) {
    $d = $r->validate([
        'title'=>'sometimes|required',
        'content'=>'nullable',
        'published'=>'boolean'
    ]);
    $post->update($d);
    return $post;
}
public function destroy(\App\Models\Post $post) {
    $post->delete();
    return response()->noContent();
}
}
