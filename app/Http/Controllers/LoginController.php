<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index(Request $request)
    {
        $erro = '';

        if ($request->erro == 1) {
            $erro = 'Usuário e ou senha não existe';
        }

        if ($request->erro == 2) {
            $erro = 'Necessário realizar login para ter acesso a página';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function login(Request $request)
    {
        $regras = [
            'email' => 'required',
            'password' => 'required',
        ];

        $msg = [
            'email.required' => 'O campo email é obrigatório',
            'password.required' => 'O campo senha é obrigatório',
        ];

        $request->validate($regras, $msg);

        $email = $request->email;
        $password = $request->password;

        $existe = $this->user->where('email', $email)->where('password', $password)->get()->first();
        if (isset($existe->name)) {

            session([
                'nome' => $existe->name,
                'email' => $existe->email
            ]);

            return redirect()->route('app.home');
        }

        return redirect()->route('site.login', ['erro' => 1]);
    }

    public function sair()
    {
        session()->forget(['name', 'email']);
        return redirect()->route('/');
    }
}
