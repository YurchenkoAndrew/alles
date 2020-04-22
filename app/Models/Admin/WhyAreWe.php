<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string image_service_1
 * @property string image_service_2
 * @property string image_service_3
 */
class WhyAreWe extends Model
{
    protected $fillable = ['title', 'slogan', 'image_service_1', 'title_service_1', 'description_service_1', 'image_service_2', 'title_service_2', 'description_service_2', 'image_service_3', 'title_service_3', 'description_service_3'];
}
