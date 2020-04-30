<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CommentItem extends Model
{
    protected $fillable = ['sort', 'name', 'customer', 'image', 'description'];
}
