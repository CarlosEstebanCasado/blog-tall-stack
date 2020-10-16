<?php

namespace App\Http\Livewire\Blog;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $posts;
    public $categories;
    public $users;

    public function mount(){

        $this->posts = Post::all();
        $this->categories = Category::all();
        $this->users = User::all();

    }

    public function render()
    {
        return view('livewire.blog.index');
    }
}
