<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    
    protected $redirectTo = RouteServiceProvider::HOME;

   
    public function __construct()
    {
        $this->middleware('can:delete');
    }

   
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'bidang' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'jabatan' => ['required', 'string', 'max:255'],
            'nip' => ['required', 'numeric'],
        ]);
    }

    
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'bidang' => $data['bidang'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'jabatan' => $data['jabatan'],
            'nip' => $data['nip'],
        ]);
    }
}
