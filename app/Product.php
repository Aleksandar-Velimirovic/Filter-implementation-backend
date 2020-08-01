<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\Order;
use App\ProductImage;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function productAttributeValues(){
        return $this->hasMany(ProductAttributeValue::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }
}
