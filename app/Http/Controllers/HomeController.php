<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StorePostRequest;
use App\User;

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
        // Permission::create(['name' => 'remove supporter']);

        //  Role::create(['name'=> 'supporter']);
        //   $supporter = Role::findById(3);
        //   $supporter->givePermissionTo(Permission::findById(4));
//        for done the relation and connect the role and permission
        // $admin = Role::findById(1);
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

        $posts = User::all();
        return view('/home/index')->with('posts',$posts);

        return view('dashboard');
    }



    public function create()
    {
        return view('/home/create') ;
    }

    public function store(StorePostRequest $request)
    {
        $post = new User;
        $post -> name = $request ->input('name');
        $post -> email = $request ->input('email');
        $post -> password = $request ->input('password');
        $post -> national_id = $request ->input('national_id');
        $post -> avatar_img = $request ->input('avatar_img');
        $post -> save() ;

        return redirect('/home');
    }

    public function show($id)
    {
        $posts = User::find($id);
        return view('/home/show')->with('posts',$posts);
    }

    public  function edit($id)
    {
        $post = User::find($id); 
        return view ('home/edit')->with('post',$post);
    }

    public function update($id,StorePostRequest $request)
    {
        // $posts = Post::find($id);
        // $posts->update([
        //     'title'=>request()->title,
        //     'description'=>request()->description,
        //     'creator'=>request()->creator
        // ]);
        // return redirect (route('home/index'));

        $post =  User::find($id);
        $post -> name = $request ->input('name');
        $post -> email = $request ->input('email');
        $post -> password = $request ->input('password');
        $post -> national_id = $request ->input('national_id');
        $post -> avatar_img = $request ->input('avatar_img');
        $post -> save() ;

        return redirect('/home');
    }

    public function destroy($id)
    {
        $post = User::find($id);
        $post -> delete();
        return redirect('/home');
    }
}
