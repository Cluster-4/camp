<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [

                'name' => 'boat2',
                'email' => 'test1@asdasd.com',
                'password' => bcrypt('123456')

            ],
            [

                'name' => 'boat3',
                'email' => 'test2@asdasd.com',
                'password' => bcrypt('123456')
            ]
        ];
        foreach($user as $key =>$value){
            User::create($value);
        }
    }
}
