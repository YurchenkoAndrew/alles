<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string image
 */
class PortfolioItem extends Model
{
    protected $fillable = ['portfolio_id', 'sort', 'image', 'title', 'description', 'published'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filter(){
        return $this->belongsTo(Portfolio::class, 'portfolio_id', 'id');
    }
}
