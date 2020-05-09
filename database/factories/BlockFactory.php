<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Block;
use Faker\Generator as Faker;

$factory->define(Block::class, function (Faker $faker) {
    return [
        'title' => 'Block',
        'published' => '1',
    ];
});
