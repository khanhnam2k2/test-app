<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface {
    public function getAll()
    {
        return Product::select('products.*')->get();
    }
}