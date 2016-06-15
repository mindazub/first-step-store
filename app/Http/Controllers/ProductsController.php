<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Http\Requests;

class ProductsController extends Controller
{
    public function index(){
    	$products = Product::paginate(9);
    	$categories = Category::all();
    	// dd($categories);
    	return view('products.index')->with('products', $products)->with('categories', $categories);
    }

    public function show($id){
    	$categories = Category::all();
    	$product = Product::findOrFail($id);
    	// dd($product);
    	return view('products.show')->with('product', $product)->with('categories', $categories);
    }

    public function search() {
        $keyword = Input::get('keyword', '');
        $products = User::SearchByKeyword($keyword)->get();
        return view('products.search')->with('products', $products)->with('keyword', $keyword);
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('products.edit')->with('product', $product);
    }
}
