<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions user model
        Permission::create(['name' => 'create:user']);
        Permission::create(['name' => 'read:user']);
        Permission::create(['name' => 'update:user']);
        Permission::create(['name' => 'delete: user']);

        // create roles and assign created permissions
        Permission::create(['name' => 'create:role']);
        Permission::create(['name' => 'read:role']);
        Permission::create(['name' => 'update:role']);
        Permission::create(['name' => 'delete: role']);

        Permission::create(['name' => 'create:permission']);
        Permission::create(['name' => 'read:permission']);
        Permission::create(['name' => 'update:permission']);
        Permission::create(['name' => 'delete: permission']);

        Permission::create(['name' => 'read:admin']);
        Permission::create(['name' => 'update:admin']);

        // this can be done as separate statements
        // $role = Role::create(['name' => 'user-simple'])
            // ->givePermissionTo('update: user','delete: user');

        // or may be done by chaining
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['update:role', 'delete: role']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
