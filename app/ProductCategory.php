<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\ProductCategoryAttribute;

class ProductCategory extends Model
{
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function productCategoryAttributes(){
        return $this->hasMany(ProductCategoryAttribute::class);
    }
}
