<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['title', 'description'];
}