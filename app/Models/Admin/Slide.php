<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['sort', 'title', 'slogan', 'description', 'image', 'published'];
}
