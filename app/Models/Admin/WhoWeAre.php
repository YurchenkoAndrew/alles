<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 */
class WhoWeAre extends Model
{
    protected $fillable = ['title', 'description'];
}
