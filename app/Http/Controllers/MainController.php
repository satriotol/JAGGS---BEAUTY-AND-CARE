<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index')->with('images',Image::all())->with('products',Product::all());
    }
}
