<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
            'Admin',
            'Teacher',
            'Supporter'
        ];

        foreach ($roles as $role){
            $roleTable =new \Spatie\Permission\Models\Role();
            $roleTable->name = $role;
            $roleTable->save();
        }

    }
}
