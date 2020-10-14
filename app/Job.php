<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];






    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function applied()
    {
        return $this->hasOne(Apply::class);
    }





}
