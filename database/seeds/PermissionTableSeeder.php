<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'showTeacher',
            'createTeacher',
            'updateTeacher',
            'deleteTeacher',
            'showCourse',
            'createCourse',
            'updateCourse',
            'deleteCourse',
            'showSupporter',
            'createSupporter',
            'updateSupporter',
            'deleteSupporter',
            'showStudent'
        ];

        foreach ($permissions as $permission){
            $permissionTable = new \Spatie\Permission\Models\Permission();
            $permissionTable->name = $permission;
            $permissionTable->save();
        }
    }
}
