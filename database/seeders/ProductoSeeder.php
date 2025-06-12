<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Ejecuta el seeder.
     */
    public function run(): void
    {
        Producto::insert([
            [
                'nombre' => 'Martillo',
                'descripcion' => 'Martillo de acero forjado',
                'precio' => 120.50,
                'stock' => 50,
                'categoria' => 'Herramientas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Destornillador',
                'descripcion' => 'Destornillador de punta plana',
                'precio' => 35.00,
                'stock' => 100,
                'categoria' => 'Herramientas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Pintura blanca',
                'descripcion' => 'Pintura látex para interiores',
                'precio' => 250.00,
                'stock' => 30,
                'categoria' => 'Pinturas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
} 