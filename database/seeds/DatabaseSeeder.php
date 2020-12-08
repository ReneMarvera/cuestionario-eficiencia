<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	CuestionarioSeeder::class,
        	ApartadoSeeder::class,
        	MensajeSeeder::class,
        	PreguntaSeeder::class
        ]);
    }
}
