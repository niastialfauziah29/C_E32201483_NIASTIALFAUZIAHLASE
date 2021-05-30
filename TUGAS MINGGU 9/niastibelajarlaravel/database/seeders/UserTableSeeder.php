<?php

namespace Database\Seeders;

use App\Models\User;
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
        //memasukkan data user 
        User::insert([
            'name' => 'Niasti',
            'email' => 'niasti@gmail.com',
            'password' => bcrypt(12345678),
        ]);
    }
}
