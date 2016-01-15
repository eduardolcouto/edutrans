<?php

use Illuminate\Database\Seeder;

class MensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Edutrans\Mensagem::truncate();

       factory(Edutrans\Mensagem::class,15)->create();
    }
}
