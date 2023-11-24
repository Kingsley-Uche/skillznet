<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    //
    protected $fillable= ['title', 'slug','excerpt', 'post_content','featured_image', 'author_id'



];
}




