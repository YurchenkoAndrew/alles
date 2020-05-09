<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Block extends Model
{
    protected $fillable = ['title', 'published', 'slug'];
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0 ,40). '-'. Carbon::now()->format('dmyHi'), '-');
    }
}
