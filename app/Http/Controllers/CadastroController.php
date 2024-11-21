<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Assumindo que você tem um modelo User

class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'data_nascimento' => 'date',
            'tipo_usuario' => 'required',
        ]);

        // Criação do usuário
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // ... outros campos
        ]);

        // Redirecionamento para a página de login
        return redirect()->route('login');
    }
}