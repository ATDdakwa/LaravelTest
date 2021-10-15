<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin123')],
        ];

        foreach ($users as $user) {
            User::query()->create($user);
        }
        
}
}
