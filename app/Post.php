<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";

    protected $primaryKey = 'post_id';

    protected $fillable = ['post_date', 'post_slug', 'post_title', 'post_text', 'category_id'];
}
