<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest; 
use App\Http\Requests\LoginRequest; 
use Session;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login ()
    {
        return view('admin.login');
    }

    public function register ()
    {
        return view('admin.register');
    }

    public function logout ()
    {
        if (Session::get('loggedUser')) {
            Session::pull('loggedUser');
        }
        return redirect(route('empresas.home'));
    }

    public function registerSave (UserRequest $request)
    {
        $user = new User;
        $user->login = $request->login;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if ($save) {
            return redirect(route('empresas.login'));
        } else {
            return back()->with('fail','Erro ao adicionar usuario');
        }
    }

    public function auth (LoginRequest $request)
    {
        $userInfo = User::where('login', '=', $request->login)->first();

        if (!$userInfo) {
            return back()->with('fail','Login nao encontrado');
        } else {
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('key', 'value');
                \Illuminate\Support\Facades\Session::put('loggedUser', $userInfo->id);
                return redirect('/');
            } else {
                dd('fail');
                return back()->with('fail','Senha incorreta');
            }
        }
    }
}
