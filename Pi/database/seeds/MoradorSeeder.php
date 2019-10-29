<?php

use Illuminate\Database\Seeder;

class MoradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('moradores')->insert([
            ['id'=>'1', 'cpf'=>'000.000.000-00','nome'=>'Lucas Matheus', 'email'=>'lucas@iesb.br', 'telefone'=>'(00)00000-0000', 'marca'=>'Toyota', 'veiculo'=>'Corolla', 'placa'=>'AAA-0000', 'situacao'=>'Ativo', 'condominio_id'=>'1', 'unidade_id'=>'1'],
            ['id'=>'2', 'cpf'=>'111.111.111-11','nome'=>'Samanta Meira', 'email'=>'samanta@iesb.br', 'telefone'=>'(11)11111-1111','marca'=>'BMW', 'veiculo'=>'320i', 'placa'=>'BBB-1111', 'situacao'=>'Ativo', 'condominio_id'=>'2', 'unidade_id'=>'2'],
            ['id'=>'3', 'cpf'=>'111.111.111-11','nome'=>'Caio Isidio', 'email'=>'caio@iesb.br', 'telefone'=>'(22)22222-2222','marca'=>'Mercedes', 'veiculo'=>'C180', 'placa'=>'CCC-2222', 'situacao'=>'Ativo', 'condominio_id'=>'1', 'unidade_id'=>'1']
        ]);
    }
}
