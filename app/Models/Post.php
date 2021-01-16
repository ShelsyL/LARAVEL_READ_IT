<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Comment
    public function comment(){
        return $this->belongsTo('App\Http\Models\Comment');
    }

    // Categorie
    public function categorie(){
        return $this->belongsTo('App\Http\Models\Categorie');
    }

    // Author
    public function author(){
        return $this->belongsTo('App\Http\Models\Author');
    }

    // Tag
    public function tags() {
      return $this->belongsToMany('App\Http\Models\Tag', 'posts_has_tags');
    }
}
