<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*         $user = new \App\Models\User();
        $user->create([
            'name'=>'Diego',
            'email'=> 'teste@teste.com',
            'password'=>bcrypt('12345678')
        ]); */

        \App\Models\User::factory(30)->create();
    }
}
