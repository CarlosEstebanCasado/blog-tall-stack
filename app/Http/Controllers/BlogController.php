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
        return view('blog.index', compact('posts', 'categories', 'users'));
    }

    /**
     * Display all categories
     * @return \Illuminate\Http\Response
     */
    public function getCategories(){
        $categories = Category::all();
        return view('blog.categories', compact('categories'));
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
        return view('blog.category', compact('posts', 'category', 'users'));
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

        return view('blog.post', compact('post', 'categories', 'users'));
    }
}
