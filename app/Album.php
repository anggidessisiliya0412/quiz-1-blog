<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $table = "album";

    protected $primaryKey = 'album_id';

    protected $fillable = ['album_name', 'album_text', 'photo_id'];
    
}
