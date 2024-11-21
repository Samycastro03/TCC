<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            
          
'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'birthdate' => 'required|date',
            'password' => 'required|string|min:8|confirmed',
            
           
'role' => 'required|string'
        ]);

        
      
User::create([
 
'name' => $validated['name'],
            'email' => $validated['email'],
            'birthdate' => $validated['birthdate'],
            
        
'password' => Hash::make($validated['password']),
            'role' => $validated['role']
        ]);

        return redirect('/login')->with('success', 'Cadastro realizado com sucesso!');
    }
}