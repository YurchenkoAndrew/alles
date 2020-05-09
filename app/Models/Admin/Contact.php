<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 */
class Contact extends Model
{
    protected $fillable = ['title', 'description', 'address', 'email', 'phone_one', 'phone_two', 'facebook', 'instagram', 'vkontakte', 'odnoklassniki'];
}
