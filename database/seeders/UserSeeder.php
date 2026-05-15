<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()-> create([
            'name'=>'Fulando de Tal',
            'email'=> 'fulano@gmail.com',
            'senha'=> '123456',
        ]);
    }
}
