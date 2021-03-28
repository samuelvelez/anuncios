<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategorias;

use Faker\Factory as Faker;
class SubCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        for ($i=0; $i < 160; $i++) {
            $faker = Faker::create();
            $subcategorias[] = [
                'nombre' => $faker->unique()->firstName,
                'estado'    => 1,
                'categoriaid'   => intval($i/10)+1                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
            ];
        }
        foreach ($subcategorias as $subca) {
            Subcategorias::create($subca);
        }
    }
}
