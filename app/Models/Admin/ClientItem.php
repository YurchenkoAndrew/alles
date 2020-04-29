<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ClientItem extends Model
{
    protected $fillable = ['title', 'image','link', 'sort'];
}
