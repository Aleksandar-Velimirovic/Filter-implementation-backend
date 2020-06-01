<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\ProductCategoryAttribute;

class ProductAttributeValue extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function productCategoryAttribute(){
        return $this->belongsTo(ProductCategoryAttribute::class);
    }
}
