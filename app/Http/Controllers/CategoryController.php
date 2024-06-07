<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response;
     */
    public function index(int $id): Response
    {
        return Inertia::render('Category', [
            'category_name' => Category::find($id),
            'category_by_id' => Product::where('category', $id)->get(),
        ]);
    }
}
