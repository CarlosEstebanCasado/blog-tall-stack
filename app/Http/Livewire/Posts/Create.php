<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $users;
    public $categories;

    public $title;
    public $body;
    public $author;
    public $category;

    protected $rules = [
        'title'     => 'required|min:3|max:50',
        'category'  => 'required',
        'author'    => 'required'
    ];

    protected $messages = [
        'title.required'        => 'The :attribute is required',
        'title.min'             => 'The :attribute has to be more than 3 characters',
        'title.max'             => 'The :attribute has to be 50 characters maximum',

        'category.required'     => 'The :attribute is required',

        'author.required'     => 'The :attribute is required'
    ];

    public function mount(){
        $this->users = User::all();
        $this->categories = Category::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function savePost()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'user_id' => $this->author,
            'category_id' => $this->category,
            'body'  => $this->body,

        ]);
        $this->emitTo('blog.index','postAdded');
        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
