<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string logo
 * @property string og_image
 */
class Setting extends Model
{
    protected $fillable = ['logo', 'title', 'description', 'og_image', 'keywords'];
}
