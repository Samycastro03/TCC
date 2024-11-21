<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    // Add the destroy method to handle account deletion
    public function destroy(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Delete the user's account
        if ($user) {
            $user->delete();

            // Log the user out after account deletion
            Auth::logout();

            // Redirect the user to the homepage with a success message
            return redirect('/')->with('status', 'Conta excluída com sucesso.');
        }

        // If the user is not authenticated or account deletion fails
        return redirect()->back()->with('error', 'Erro ao excluir a conta.');
    }
}
