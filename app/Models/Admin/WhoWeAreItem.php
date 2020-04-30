<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class WhoWeAreItem extends Model
{
    protected $fillable = ['image', 'name','profession', 'description', 'facebook', 'instagram', 'vkontakte'];
}
