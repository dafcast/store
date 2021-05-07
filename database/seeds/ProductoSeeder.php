<?php

use App\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'Leche',
            'referencia' => '#001',
            'precio' => 1546.3,
            'peso' => 25.5,
            'categoria_id' => 1,
            'stock' => 35,
        ]);

        Producto::create([
            'nombre' => 'Pollo',
            'referencia' => '#002',
            'precio' => 3246.3,
            'peso' => 12.2,
            'categoria_id' => 2,
            'stock' => 23,
        ]);

        Producto::create([
            'nombre' => 'Lenteja',
            'referencia' => '#003',
            'precio' => 1568.33,
            'peso' => 15,
            'categoria_id' => 3,
            'stock' => 3000,
        ]);

        Producto::create([
            'nombre' => 'Geseosa',
            'referencia' => '#004',
            'precio' => 156824.33,
            'peso' => 2.5,
            'categoria_id' => 4,
            'stock' => 223,
        ]);

        Producto::create([
            'nombre' => 'Agua',
            'referencia' => '#005',
            'precio' => 156824.33,
            'peso' => 2.5,
            'categoria_id' => 4,
            'stock' => 0,
        ]);
    }
}
