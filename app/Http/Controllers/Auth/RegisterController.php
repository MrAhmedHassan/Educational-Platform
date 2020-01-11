<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
//            'image' => 'image',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        dd(request()->image);

//dd(request()->image);

       // $request = request();

            //$path = $request->file('image')->store('avatars');

//        $profileImage = $request->file('image');
//        $profileImageSaveAsName = time() . Auth::id() . "-profile." .
//            $profileImage->getClientOriginalExtension();
//
//        $upload_path = 'profile_images/';
//        $profile_image_url = $upload_path . $profileImageSaveAsName;
//        $success = $profileImage->move($upload_path, $profileImageSaveAsName);


//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//            'dob' => $data['dob'],
//            'profile_picture' => $profile_image_url,
//        ]);
//        if (request()->image) {
////            dd(request()->image);
//            $path = request()->image->store('avatars');
//
////            $fileWithEx= request()->image->getClientOriginalName();
////            $fileName =pathinfo($fileWithEx , PATHINFO_FILENAME);
////            $fileEx = (request()->image)->getClientOriginalExtension();
////            $fileNameStore = $fileName.'_'.time().'.'.$fileEx;
////            $path = request()->image->storeAs('public/images',$fileNameStore);
//        }

//        auth()

//        auth()->user()->assignRole('Admin');
//    Auth::user()->assignRole('Admin');
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
//            'avatar' =>$data['image'],
//            $request->file('image')->store('avatars');
        ]);

    }
}
