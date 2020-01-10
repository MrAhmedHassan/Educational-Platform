<?php

use Illuminate\Database\Seeder;

class RolePermissionTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = new \Spatie\Permission\Models\Role();
        $role1->findById(1);
        $role2 = new \Spatie\Permission\Models\Role();
        $role2->findById(2);
        $role3 = new \Spatie\Permission\Models\Role();
        $role3->findById(3);

        $permissions = \Spatie\Permission\Models\Permission::pluck('id','id')->all();
        $role1->syncPermissions($permissions);
        $role2->syncPermissions($permissions);
        $role3->syncPermissions($permissions);

    }
}
