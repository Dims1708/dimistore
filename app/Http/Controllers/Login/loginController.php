<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function view_login(Request $request){
        return view(view: 'login');
    }

    public function get_login(Request $request){
        $value = $request->validate([
            'username' => ['required','string','exists:users,name'],
            'password' => ['required','string','min:8'],
        ]);
        if(Auth::attempt(['name' => $value['username'], 'password' => $value['password']])){
            return redirect('/produk');
        }else{
            return redirect('/login');
        }
    }
}