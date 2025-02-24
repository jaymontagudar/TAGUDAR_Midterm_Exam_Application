<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Sample products (modify based on your chosen theme)
        $products = [
            ["name" => "iPhone 15 Pro", "price" => "$999"],
            ["name" => "MacBook Air M2", "price" => "$1,199"],
            ["name" => "Samsung Galaxy S23", "price" => "$899"],
            ["name" => "Sony WH-1000XM5", "price" => "$349"],
            ["name" => "iPad Pro 11", "price" => "$799"]
        ];

        return view('products', compact('products'));
    }
}
