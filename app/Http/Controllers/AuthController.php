<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Muestra la vista del Login
    public function showLogin() {
        return view('login');
    }

    // Procesa el inicio de sesión
    public function login(Request $request) {
        $credenciales = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->intended('/'); // Te manda al inicio
        }

        return back()->withErrors(['email' => 'El email o la contraseña no coinciden.']);
    }

    // Muestra la vista de Registro
    public function showRegister() {
        return view('registro');
    }

    // Procesa el formulario y lo mete físicamente en tu base de datos
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Guarda el usuario en la tabla que tenés en pantalla
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Contraseña encriptada
        ]);

        return redirect()->route('login')->with('success', '¡Registro exitoso! Ya podés iniciar sesión.');
    }

    // Cierra la sesión
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}