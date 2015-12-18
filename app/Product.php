<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'featured', 'recommend'];

    public function categories()
    {
        return $this->belongsTo('CodeCommerce\Category');
    }
}
