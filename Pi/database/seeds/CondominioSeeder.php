<?php

use Illuminate\Database\Seeder;

class CondominioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('condominios')->insert([
            ['cnpj'=>'00.000.000/0000-00','nome'=>'Allegro', 'endereco'=>'QNN 36 Area especial', 'cep'=>'00000-000' ,'cidade'=>'Ceilândia', 'bairro'=>'Ceilandia Sul', 'uf'=>'DF'],
            ['cnpj'=>'11.111.111/1111-11','nome'=>'Borges Landeiro', 'endereco'=>'QNP 15 Area especial', 'cep'=>'11111-111' , 'cidade'=>'Ceilândia', 'bairro'=>'Ceilandia Norte', 'uf'=>'DF']
        ]);
    }
}
