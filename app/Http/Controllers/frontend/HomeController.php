<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $dir = 'frontend.';
    
    function home()
    {
        return view($this->dir . 'home');
    }

    function contact()
    {
        return view($this->dir . 'contact');
    }

    function about()
    {
        return view($this->dir . 'about');
    }

    function all_products()
    {
        return view($this->dir . 'all-products');
    }

    function product(Product $product)
    {
        $similar = Product::where('category_id', $product->category_id)->inRandomOrder()->take(3)->get();
        return view($this->dir . 'product-details', compact('product', 'similar'));
    }
}
