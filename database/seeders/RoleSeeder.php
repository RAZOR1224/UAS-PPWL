<?php
// RoleSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $operator = Role::create(['name' => 'Operator']);
        $adminBaak = Role::create(['name' => 'Human Resource']);
        $adminKeuangan = Role::create(['name' => 'Direktur']);
        $mahasiswa = Role::create(['name' => 'Karyawan']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product',
            'create-karyawan',
            'edit-karyawan',
            'delete-karyawan',
            'show-karyawan',
        ]);

        $operator->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product'
        ]);

        $adminBaak->givePermissionTo([
            'create-karyawan',
            'edit-karyawan',
            'delete-karyawan',
            'show-karyawan',  
        ]);

        $adminKeuangan->givePermissionTo([  
            'show-karyawan',   
        ]);

        $mahasiswa->givePermissionTo([
            'create-product',
            'edit-product',
        ]);
    }
}
