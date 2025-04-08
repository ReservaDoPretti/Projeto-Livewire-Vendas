<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'email' => 'funcionario@test.com',
            'password' => Hash::make('123456'),
            'user_type' => 'funcionario'
        ]);

        Funcionario::create([
            'user_id' => $user->id,
            'nome' => 'Funcionario',
            'cpf' => '11122233300',
            'cargo' => 'vendedor'
        ]);
    }
}
