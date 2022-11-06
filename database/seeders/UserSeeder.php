<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'yusri',
        //     'email' => 'yusri@gmail.com',
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => now()
        // ]);

        collect([
            [
                'name' => 'luffy@gmail.com',
                'email' => 'luffy@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'zoro@gmail.com',
                'email' => 'zoro@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'sanji@gmail.com',
                'email' => 'sanji@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ]
        ])->each(function ($user) {
            User::create($user);
        });

        collect(['admin', 'moderator'])->each(function ($role) {
            Role::create(['name' => $role]);
        });

        User::find(1)->roles()->attach([1]);
        User::find(2)->roles()->attach([2]);
    }
}
