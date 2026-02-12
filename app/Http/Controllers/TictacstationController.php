<?php

namespace App\Http\Controllers;

use App\Models\Product;

class TictacstationController extends Controller
{
    public function __invoke()
    {
        $products = Product::all()->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'specifications' => $product->specifications,
                'description' => $product->description,
                'packaging' => $product->getFirstMediaUrl('packaging'),
                'mascot' => $product->getFirstMediaUrl('mascot'),
                'color' => $product->color,
            ];
        });

        return view('pages.tictacstation', compact('products'));
    }
}
