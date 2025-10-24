<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;   // 
use App\Models\Producto;    // 

class ProductosSeeder extends Seeder {
    public function run(): void {
        $cats = Categoria::pluck('id','nombre'); // Collection key=nombre
        $items = [
            ['nombre'=>'Filtro cartucho 10"', 'precio'=>150,   'categoria_id'=>$cats['Filtros'] ?? null],
            ['nombre'=>'Bomba centrífuga 1HP','precio'=>1250, 'categoria_id'=>$cats['Bombas'] ?? null],
        ];
        foreach ($items as $p) { Producto::create($p); }
    }
}
