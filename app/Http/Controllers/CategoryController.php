<?php

// CategoryController.php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Ambil semua kategori dari database

        return view('categories.index', ['categories' => $categories]);
    }
}
