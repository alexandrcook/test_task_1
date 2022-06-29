<?php

namespace App\Http\Controllers;

use App\Filters\Filter;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    public function init()
    {
        $products = Product::paginate();
        return view('products.index', compact('products'));
    }

    public function index()
    {
        if(request()->except('page')){
            $productsFilter = new Filter(Product::class, request()->except('page'));
            $filteredProducts = $productsFilter->apply();

            return ProductResource::collection(
                $filteredProducts->paginate(request()->has('per_page') ? request()->get('per_page') : '')
            );
        }

        return ProductResource::collection(Product::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return 'store';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Product $product
     * @return Response
     */
    public function update(Product $product) : ProductResource
    {
        $product->update(request()->all());
        return new ProductResource($product);
    }

    /**
     * Soft delete the specified blog.
     */
    public function destroy(Product $product) : JsonResponse
    {
        $product->delete();
        return response()->json(['removed' => true]);
    }
}
