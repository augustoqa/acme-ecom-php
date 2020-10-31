<?php
namespace App\Controllers\Admin;

use App\Models\Category;
use Illuminate\Database\Capsule\Manager as Capsule;

class ProductCategoryController
{
    public function show()
    {
        $categories = Category::all();

        var_dump($categories);
        exit();
    }

    public function store()
    {
        
    }
}