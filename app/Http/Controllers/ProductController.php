<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = [
            ['name' => 'Smartphone', 'brand' => 'Brand A', 'price' => 699],
            ['name' => 'Laptop', 'brand' => 'Brand B', 'price' => 1299],
            ['name' => 'Tablet', 'brand' => 'Brand C', 'price' => 499],
            ['name' => 'Smartwatch', 'brand' => 'Brand D', 'price' => 199],
            ['name' => 'Headphones', 'brand' => 'Brand E', 'price' => 99],
        ];

        return view('products', compact('products'));
    }
}