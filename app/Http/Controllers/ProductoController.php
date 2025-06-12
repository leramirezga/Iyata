<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Http\Resources\ProductoResource;
use App\Services\ProductoService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Controlador para la gestión de productos.
 */
class ProductoController extends Controller
{
    protected ProductoService $productoService;

    public function __construct(ProductoService $productoService)
    {
        $this->productoService = $productoService;
    }

    /**
     * Muestra un listado paginado de productos.
     */
    public function index(Request $request)
    {
        $porPagina = $request->get('per_page', 15);
        $productos = $this->productoService->listar($porPagina);
        return ProductoResource::collection($productos);
    }

    /**
     * Muestra un producto específico.
     */
    public function show($id)
    {
        $producto = $this->productoService->obtenerPorId($id);
        return new ProductoResource($producto);
    }

    /**
     * Almacena un nuevo producto.
     */
    public function store(ProductoRequest $request)
    {
        $producto = $this->productoService->crear($request->validated());
        return (new ProductoResource($producto))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Actualiza un producto existente.
     */
    public function update(ProductoRequest $request, $id)
    {
        $producto = $this->productoService->actualizar($id, $request->validated());
        return new ProductoResource($producto);
    }

    /**
     * Elimina un producto del sistema.
     */
    public function destroy($id)
    {
        $this->productoService->eliminar($id);
        return response()->json(['mensaje' => 'Producto eliminado correctamente.'], Response::HTTP_NO_CONTENT);
    }
} 