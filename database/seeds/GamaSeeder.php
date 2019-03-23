<?php

use Illuminate\Database\Seeder;
use App\Gama;

class GamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gama = new Gama();
        $gama->tipo_gama = 'Gama Alta';
        $gama->save();

        $gama = new Gama();
        $gama->tipo_gama = 'Gama Media';
        $gama->save();

        $gama = new Gama();
        $gama->tipo_gama = 'Gama Baja';
        $gama->save();
    }
}
