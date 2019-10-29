<?php

use Illuminate\Database\Seeder;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('unidades')->insert([
            ['nome'=>'Allegro Ceilandia','proprietario'=>'Lucas Matheus', 'email'=>'lucas@prop.br', 'telefone'=>'(00)00000-0000', 'condominio_id'=>'1'],
            ['nome'=>'Borges Landero Ceilandia','proprietario'=>'Samanta Meira', 'email'=>'samanta@prop.br', 'telefone'=>'(11)11111-1111', 'condominio_id'=>'2'],
        ]);
    }
}
