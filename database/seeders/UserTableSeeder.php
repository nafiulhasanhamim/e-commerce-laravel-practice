<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert(
          [
              'name' => 'test',
              'email'=>'test@test.com',
              'password' => \Hash::make('1234abcd')
          ]
        );
        $users = User::factory()->count(10)->create();
    }
}
