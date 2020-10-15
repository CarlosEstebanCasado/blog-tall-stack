<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'body',
        'image'
    ];

    /**
     * Get the category
     */
    public function getCategory(){
        return $this->hasOne(Category::class);
    }
}