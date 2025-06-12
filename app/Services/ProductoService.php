<?php

namespace App\Services;

use App\Models\Producto;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Servicio para la gestión de productos.
 */
class ProductoService
{
    /**
     * Obtiene una lista paginada de productos.
     */
    public function listar(int $porPagina = 15): LengthAwarePaginator
    {
        return Producto::orderByDesc('created_at')->paginate($porPagina);
    }

    /**
     * Obtiene un producto por su ID.
     */
    public function obtenerPorId(int $id): Producto
    {
        return Producto::findOrFail($id);
    }

    /**
     * Crea un nuevo producto.
     */
    public function crear(array $datos): Producto
    {
        return Producto::create($datos);
    }

    /**
     * Actualiza un producto existente.
     */
    public function actualizar(int $id, array $datos): Producto
    {
        $producto = Producto::findOrFail($id);
        $producto->update($datos);
        return $producto;
    }

    /**
     * Elimina un producto por su ID.
     */
    public function eliminar(int $id): void
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
    }
} 