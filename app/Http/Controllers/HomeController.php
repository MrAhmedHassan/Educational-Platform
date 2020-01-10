<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        for create role
//        Role::create(['name'=>'Admin']);
//        Role::create(['name'=>'Teacher']);

//        for create permission
//        Permission::create(['name'=>'create teacher']);
//        Permission::create(['name'=>'create supporter']);
//        Permission::create(['name'=>'remove teacher']);
//        Permission::create(['name' => 'remove supporter']);

//         Role::create(['name'=> 'supporter']);
//          $supporter = Role::findById(3);
//          $supporter->givePermissionTo(Permission::findById(4));
//        for done the relation and connect the role and permission
//        $admin = Role::findById(1);
//        $admin->givePermissionTo('create teacher');
//        $teacher = Role::findById(2);
//        $teacher->givePermissionTo('create supporter');
//        $admin->givePermissionTo(Permission::findById(2));
//        or
//        $removeTeacher = Permission::findById(3);
//        $removeTeacher->assignRole('Admin');

//        To Remove Permission
//        $admin->revokePermissionTo('create supporter');
//      $removeTeacher->removeRole('Admin');
        return view('dashboard');
    }
}
