<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * For many to many Relationship
     * @var string
     */
    protected $table = 'categories';

    public function product()
    {
        $this->belongsToMany('App\Products', 'product_category', 'cid', 'pid');
    }
}
