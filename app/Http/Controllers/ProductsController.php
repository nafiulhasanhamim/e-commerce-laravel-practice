<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products_index(Request $request, int $pag = 1)
    {
        $perPage = (int)$request->input('per_page', 20);
        $query = Products::with('brand');


        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'price-asc':
                    $query = $query->orderByPriceAsc();
                    break;
                case 'price-desc':
                    $query = $query->orderByPriceDesc();
                    break;
                case 'name-asc':
                    $query = $query->orderByNameAsc();
                    break;
                case 'name-desc':
                    $query = $query->orderByNameDesc();
                    break;
                default:
                    break;
            }
        }

        $products = $query->paginate($perPage);
        return view('products', compact('products'), ['pag' => $pag]);
    }



    public function products_collection()
    {
        $amago_brands = Brand::all();
        return view('collection',['amago_brands'=>$amago_brands]);
    }

    public function product_details(Request $request, int $id)
    {
        $product = Products::find($id);
        $brand = Brand::find($product->brand_id);
        return view('product_detail', ['footwear' => $product, 'brand_name' => $brand]);
    }
}
