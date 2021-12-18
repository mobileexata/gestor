<?php

use App\Empresa;
use App\Movimento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Empresa::class, 10)->create()->each(function ($empresa){
//            $empresa->posts()->save(factory(Movimento::class, 200)->make());
//        });
    }
}
