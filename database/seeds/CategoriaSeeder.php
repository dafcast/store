<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Lacteos',
        ]);

        Categoria::create([
            'nombre' => 'Carnes',
        ]);

        Categoria::create([
            'nombre' => 'Granos',
        ]);

        Categoria::create([
            'nombre' => 'Bebidas',
        ]);
    }
}
