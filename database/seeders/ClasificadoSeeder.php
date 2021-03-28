<?php

namespace Database\Seeders;


use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Clasificado;

class ClasificadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 1600; $i++) {
            $faker = Faker::create();
            $subcategorias[] = [
                'titulo'        => $faker->title,
                'descripcion'   => $faker->text,
                'imagen'        => "https://picsum.photos/200/300",
                'categoriaId'   => intval($i/100)+1,
                'subcategoriaId'=> intval($i/10)+rand(0,9)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
            ];
        }
        foreach ($subcategorias as $subca) {
            Clasificado::create($subca);
        }
    }
}
