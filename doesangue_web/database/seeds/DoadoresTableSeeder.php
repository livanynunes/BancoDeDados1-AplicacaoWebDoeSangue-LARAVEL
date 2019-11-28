<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doadores')->insert([
            'name' => 'Doador Teste',
            'data_nascimento' => '1997-11-21',
            'd_cpf' => '137.742.826-50',
            'd_endereco' => 'Av. José Antônio, n62',
            'd_telefone' => '(31)9 9999-9999',
            'email' => 'doador@doador.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'd_peso' => '62',
            'tipo_sangue' => 'A+',
            'created_at' => now(),
            'updated_at' => now(),
            
            
        ]);
    }
}
