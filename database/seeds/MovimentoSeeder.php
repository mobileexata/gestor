<?php

use App\Movimento;
use Illuminate\Database\Seeder;

class MovimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movimento::class, 10)->create();
    }
}
