<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $id): Response
    {
        return Inertia::render('Category', [
            'category_name' => Category::find($id),
            'category_by_id' => Product::where('category', $id)->get()
        ]);
    }
}
