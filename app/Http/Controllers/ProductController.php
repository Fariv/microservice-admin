<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Jobs\ProductCreated;
use App\Jobs\ProductUpdated;
use App\Jobs\ProductDeleted;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->only('title', 'image'));

        ProductCreated::dispatch($product->toArray());

        return response()->json($product);
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);

        $product->update($request->only(array("title", "image")));

        ProductUpdated::dispatch($product->toArray());

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::destroy($id);
        
        ProductDeleted::dispatch($id);

        return response(null, 204);
    }
}
