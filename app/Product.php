<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function productAttributeValues(){
        return $this->hasMany(ProductAttributeValue::class);
    }
}
