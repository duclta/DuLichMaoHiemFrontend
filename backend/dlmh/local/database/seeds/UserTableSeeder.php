<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin_dlmh@gmail.com',
                'password' => bcrypt('admin'),
                'level' => 0
            ],
            [
                'name' => 'staff',
                'email' => 'staff_dlmh@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1
            ]
        ];
        DB::table('users')->insert($data);
    }
}
