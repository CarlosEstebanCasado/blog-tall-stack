<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $users = User::all();
        return view('principal', compact('posts', 'categories', 'users'));
    }

    /**
     * Display all posts from one category
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getPostsCategory($id)
    {
        $posts = Post::where('category_id',$id)->get();
        $category = Category::findOrFail($id);
        $users = User::all();
        return view('category', compact('posts', 'category', 'users'));
    }

    /**
     * Display one concrete post
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPost($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $users = User::all();

        return view('post', compact('post', 'categories', 'users'));
    }
}
