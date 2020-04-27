<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = []; //为了使用seed

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}
