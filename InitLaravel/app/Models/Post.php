<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // permet d'utiliser create() dans web.php
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];


    // permet de refuser ce qu'on peut remplir
    protected $guarded = [];
}
