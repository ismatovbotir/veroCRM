<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::create([
            'name'=>'Admin'
        ]);
        Role::create([
            'name'=>'Order'
        ]);
        Role::create([
            'name'=>'Collect'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@vero.uz',
            'password'=> Hash::make('password'),
            'role_id'=>1
        ]);
    }
}
