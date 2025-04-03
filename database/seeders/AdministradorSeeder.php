<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'email' => 'admin@teste.com',
            'password' => Hash::make('123456'),
            'user_type' => 'admin'
        ]);

        Admin::create([
            'nome' => 'Administrador',
            'cpf' => '11122233345',
            'user_id' => $user->id
        ]);
    }
}
