<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $bmrs_accounts = [
            [
                'acc_username' => 'test2',
                'acc_fname' => 'testusefnamer',
                'acc_lname' => 'testlastname',
                'acc_position' => 'b',
               'acc_password'=> bcrypt('123456'),
                'acc_email'=> 'testusser@example.com',
                'acc_tel' => '458dada484',
                'acc_status'=> 1,
                'acc_pic_path'=> 'storage\img\IMG_3189.jpg'

            ]

            ];
            foreach($bmrs_accounts as $key =>$value){
                Account::create($value);
            }
            // Account::create($bmrs_accounts);

    }
}
// SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_at' in 'field list' (Connection: mysql, SQL: insert into `bmrs_accounts` (`acc_username`, `acc_fname`, `acc_lname`, `acc_position`, `acc_password`, `acc_email`, `acc_tel`, `acc_status`, `acc_pic_path`, `updated_at`, `created_at`) values (testuser, testusefnamer, testlastname, เจ้าหน้าที่, $2y$12$xhXvhqAWzZbhEtj1gKqMR.c/reyy9MbDvbVRGLRE1anZYyiEj/JB2, testuser@example.com,     458484, 1, http://example.com, 2024-04-09 03:31:00, 2024-04-09 03:31:00))
// Base table or view not found: 1146 Table 'camp_test.accounts' doesn't exist (Connection: mysql, SQL: insert into `accounts` (`acc_username`, `acc_fname`, `acc_lname`, `acc_position`, `acc_password`, `acc_email`, `acc_tel`, `acc_status`, `acc_pic_path`, `updated_at`, `created_at`) values (testuser, testuser, UwU, เจ้าหน้าที่, $2y$12$RX0tx1N81Zl63Ert1..xF.Q3Jya7OJ458jFj4JjQpl8O58OzmyxzS, testuser@example.com, 458484, 1,   , http://example.com, 2024-04-09 03:14:59, 2024-04-09 03:14:59))
