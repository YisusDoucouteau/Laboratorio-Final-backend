<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder {
    public function run(): void {
        foreach (['Filtros','Bombas','Válvulas','Tuberías','Accesorios'] as $n) {
            Categoria::firstOrCreate(['nombre'=>$n]);
        }
    }
}

