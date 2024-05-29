<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Kalit',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin Users
        for ($i = 1; $i <= 2; $i++) {
            $admin = User::create([
                'name' => 'Admin User ' . $i,
                'email' => 'admin' . $i . '@gmail.com',
                'password' => Hash::make('123456')
            ]);
            $admin->assignRole('Admin');
        }

        // Creating Operator Users
        for ($i = 1; $i <= 5; $i++) {
            $operator = User::create([
                'name' => 'Operator User ' . $i,
                'email' => 'operator' . $i . '@gmail.com',
                'password' => Hash::make('123456')
            ]);
            $operator->assignRole('Operator');
        }

        // Creating Human Resource Users
        for ($i = 1; $i <= 5; $i++) {
            $humanResource = User::create([
                'name' => 'Human Resource User ' . $i,
                'email' => 'humanresource' . $i . '@gmail.com',
                'password' => Hash::make('123456')
            ]);
            $humanResource->assignRole('Human Resource');
        }

        // Creating Direktur Users
        for ($i = 1; $i <= 5; $i++) {
            $direktur = User::create([
                'name' => 'Direktur User ' . $i,
                'email' => 'direktur' . $i . '@gmail.com',
                'password' => Hash::make('123456')
            ]);
            $direktur->assignRole('Direktur');
        }

        // Creating Karyawan Users
        for ($i = 1; $i <= 34; $i++) {
            $karyawan = User::create([
                'name' => 'Karyawan User ' . $i,
                'email' => 'karyawan' . $i . '@gmail.com',
                'password' => Hash::make('123456')
            ]);
            $karyawan->assignRole('Karyawan');
        }
    }
}
