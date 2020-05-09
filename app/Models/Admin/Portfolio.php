<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['filter_name', 'sort'];
    public function items(){
        return $this->hasMany(PortfolioItem::class);
    }
}
