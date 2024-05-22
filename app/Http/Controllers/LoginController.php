<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Definir o tempo de expiração da sessão
            $request->session()->put('expires_at', now()->addMinutes(5));

            // Se a autenticação for bem-sucedida, redirecione para a página de destino original
            // ou para a rota de dashboard se não houver uma página de destino original
            return redirect()->intended('/admin/dashboard');
        }

        // Se a autenticação falhar, redirecione de volta com uma mensagem de erro
        return redirect()->back()->withErrors(['error' => 'Usuário ou senha inválidos']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('expires_at'); // Limpa o tempo de expiração da sessão
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin');
    }
    
}
