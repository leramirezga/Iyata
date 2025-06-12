<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Service for managing products.
 */
class ProductService
{
    /**
     * Get a paginated list of products.
     */
    public function list(int $perPage = 15): LengthAwarePaginator
    {
        return Product::orderByDesc('created_at')->paginate($perPage);
    }

    /**
     * Get a product by its ID.
     */
    public function getById(int $id): Product
    {
        return Product::findOrFail($id);
    }

    /**
     * Create a new product.
     */
    public function create(array $data): Product
    {
        return Product::create($data);
    }

    /**
     * Update an existing product.
     */
    public function update(int $id, array $data): Product
    {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    /**
     * Delete a product by its ID.
     */
    public function delete(int $id): void
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
} 