<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{

    public function index() {
        return view('login');
    }

    public function showPanel() {
        $shirts = Auth::user()->camisas()->get();
        $orders = [];
        return view('dashboard', compact('shirts', 'orders'));
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only([
            'email', 'password'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('dashboard')->with('success', 'Bienvenido!');
        }

        return back()->withErrors([
            'email' => 'Crendenciales invalidos'
        ]);
    }

    public function registration(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'username' => 'required',
        ]);

        $data = $request->all();
        $data['address'] = $request->input('address', '');

        $this->createUser($data);
        $this->createCliente($data);

        return back()->with('success', 'Registro completo! Ya puede iniciar session');
    }

    public function createCliente($data) {
        return Cliente::create([
            'contrasena' => $data['password'],
            'correo' => $data['email'],
            'direccion' => $data['address'],
            'nombre' => $data['name'],
            'usuario' => $data['username']
        ]);
    }

    public function createUser($data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])

        ]);
    }

    public function logout(Request $request) {
        Session::flush();
        Auth::logout();

        return redirect('home');
    }
}
