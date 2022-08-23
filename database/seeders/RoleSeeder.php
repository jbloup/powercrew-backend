<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Role::create([
            'name' => 'customer'
        ]);

        Role::create([
            'name' => 'vip'
        ]);

        Role::create([
            'name' => 'ambassador'
        ]);

        Role::create([
            'name' => 'admin'
        ]);

        Role::create([
            'name' => 'super-admin'
        ]);
    }
}