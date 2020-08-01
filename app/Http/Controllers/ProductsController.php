<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\ProductImage;

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

    public function getPopularProducts(){
        
        $products = Product::all();
        
        $array = [];

        foreach($products as $product){
            $orders = Order::where('product_id', $product['id'])->count();

            $product['number_of_orders'] = $orders;

            $product->save();

            $array[] = $product['number_of_orders'];
        }
        
        rsort($array);
        
        $mostPopular = $array[0];
        $secondPopular = $array[1];
        $thirdPopular = $array[2];

        return Product::whereIn('number_of_orders', [$mostPopular, $secondPopular,$thirdPopular])->with('images')->get();
    }
}

