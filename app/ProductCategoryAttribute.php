<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\ProductAttributeValue;

class ProductCategoryAttribute extends Model
{
    public function category(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function productAttributeValues(){
        return $this->hasMany(ProductAttributeValue::class);
    }
}
