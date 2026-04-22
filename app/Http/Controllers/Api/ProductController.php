<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'data' => Product::with('category')->latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'descriptionLong' => 'nullable|string',
            'price' => 'required|numeric',
            'id_category' => 'nullable|exists:categories,id'
        ]);

        $product = Product::create($request->only([
            'name',
            'description',
            'descriptionLong',
            'price',
            'id_category'
        ]));

        return response()->json([
            'status' => 'success',
            'data' => $product
        ], 201);
    }

    public function show($id)
    {
        $product = Product::with('category')->find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Producto no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Producto no encontrado'
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'descriptionLong' => 'nullable|string',
            'price' => 'required|numeric',
            'id_category' => 'nullable|exists:categories,id'
        ]);

        $product->update($request->only([
            'name',
            'description',
            'descriptionLong',
            'price',
            'id_category'
        ]));

        return response()->json([
            'status' => 'success',
            'data' => $product
        ]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Producto no encontrado'
            ], 404);
        }

        $product->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Producto eliminado'
        ]);
    }
}
