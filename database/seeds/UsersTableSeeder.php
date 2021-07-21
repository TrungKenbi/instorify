<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [];

        $users[] = [
            'username' => 'trungkenbi',
            'email' => 'trungkenbi@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('23456789'),
            'first_name' => 'Trung',
            'last_name' => 'Dương Lê Phước',
            'dob' => '2000-06-17',
            'gender' => 'male',
            'avatar' => '/assets/img/sample_ava1.jpg',
            'is_admin' => true,
        ];

        $users[] = [
            'username' => 'hieuleggo123',
            'email' => 'hieuleggo@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('23456789'),
            'first_name' => 'Hiếu',
            'last_name' => 'Trần Minh',
            'dob' => '2000-08-12',
            'gender' => 'male',
            'is_admin' => true,
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        factory(User::class, 10)->create();
    }
}
