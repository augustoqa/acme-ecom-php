<?php
namespace App\Controllers\Admin;

use App\Models\Category;
use Illuminate\Database\Capsule\Manager as Capsule;

class ProductCategoryController
{
    public function show()
    {
        $categories = Category::all();

        return view('admin/products/categories', \compact('categories'));
    }

    public function store()
    {
        
    }
}