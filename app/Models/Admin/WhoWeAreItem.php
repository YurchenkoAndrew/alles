<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 */
class WhoWeAreItem extends Model
{
    protected $fillable = ['image', 'name','profession', 'description', 'facebook', 'instagram', 'vkontakte'];
}
