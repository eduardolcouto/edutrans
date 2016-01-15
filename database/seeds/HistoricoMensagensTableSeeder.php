<?php

use Illuminate\Database\Seeder;

class HistoricoMensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Edutrans\HistoricoMensagem::truncate();
        factory(Edutrans\HistoricoMensagem::class,100)->create();
    }
}
