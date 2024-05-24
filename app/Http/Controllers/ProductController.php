<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(int $id): Response
    {
        return Inertia::render('Product', [
            'product' => Product::find($id)
        ]);
    }
}
