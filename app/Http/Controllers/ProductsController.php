<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function getProductsByCategoryId(Request $request, int $categoryId) {
        $filters = $request->get('filters') ?? [];
        $query = Product::where('product_category_id', $categoryId);

        foreach($filters as $filter){
            $filter = json_decode($filter);
            $query->whereHas('productAttributeValues', function($q) use ($filter){
                $q->where('product_category_attribute_id', $filter->attribute_id)->whereIn('value', $filter->values);
            });
        }

        return $query->get();
    }

    public function searchProductsOfAnyCategory($searchTerm){
        return Product::where('product_title', 'LIKE', '%' . $searchTerm . '%')->get();
    }
}

