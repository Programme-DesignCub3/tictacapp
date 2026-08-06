<?php

namespace App\Http\Controllers;

use App\Models\Product;

class TictacstationController extends Controller
{
    public function __invoke()
    {

        seo()
            ->title(__('seo.product.title'), template: false)
            ->description(__('seo.product.description'));

        $products = Product::all()->map(function ($product) {
            return [
                'id' => $product->id,
                'slug' => $product->slug,
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
