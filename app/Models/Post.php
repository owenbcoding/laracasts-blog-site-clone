<?php

namespace App\Models;

//use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory; // Post::fatory()

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function category()
    {
        // hasone, hasmany, belongsTo, blongstoMany
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTO(User::class, 'user_id');
    }
        
}
