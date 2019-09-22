<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'nome' => 'Douglas',
            'email' => 'teste@teste.com',
            'password' => \Illuminate\Support\Facades\Hash::make('12345'),
            'is_admin' => true,
            'matricula' => '123456789',
        ]);

    }
}
