<?php

namespace App\Services;

use App\Repositories\ProductRepositoryInterface;

class ProductService implements ProductServiceInterface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository){
        $this->productRepository = $productRepository;
    }
    public function getAllProducts()
    {
        return $this->productRepository->getAll();
    }
}
