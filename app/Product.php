<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='tbl_products';

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
}
