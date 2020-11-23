<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Leo (Admin)';
        $user->email = 'leo@root.com';
        $user->password = '12345678';
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = 'Leo (Creator)';
        $user->email = 'leo@creator.com';
        $user->password = '12345678';
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = 'Leo (Guest)';
        $user->email = 'leo@guest.com';
        $user->password = '12345678';
        $user->role_id = 3;
        $user->save();
    }
}
