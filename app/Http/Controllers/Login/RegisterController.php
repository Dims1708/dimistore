<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\User as user;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class RegisterController extends Controller
{
    public function view_register(Request $request){
        return view(view: 'app');   
    }

    public function get_register(Request $request){
        $value = $request->validate([
            'username'=> ['required','string','max:8','unique:users,name'],
            'email'=> ['required','string',"unique:users,email"],
            'password'=> ['required','string','min:8'],
            'confirmasi_password'=> ['required','string','min:8',"same:password"]
        ]);
        User::create([
            'name' => $value['username'],
            'email' => $value['email'],
            'password' => Hash::make($value['password']),
        ]);

        return redirect('/login');

    }
}
