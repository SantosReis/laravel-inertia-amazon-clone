<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{
    public function index(int $id): Response
    {
        return Inertia::render('Product', [
            'product' => Product::find($id),
        ]);
    }
}
