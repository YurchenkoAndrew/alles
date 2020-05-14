<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    protected $fillable = ['filter_name', 'sort', 'slug'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->filter_name, 0, 40) . '-' . Carbon::now()->format('dmyHi'), '-');
    }

    public function items()
    {
        return $this->hasMany(PortfolioItem::class);
    }
}
