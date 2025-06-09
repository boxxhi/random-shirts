<?php

namespace App\Http\Controllers;

use App\Models\Camisa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CamisaController extends Controller
{

    public function index()
    {
        return view('designer');
    }

    public function registrarCamisa(Request $request)
    {
        $request->validate([
            'img_front' => 'string',
            'talla' => 'required|string|max:10',
        ]);

        Camisa::create([
            'user_id' => Auth::id(),
            'talla' => $request->input('talla'),
            'imagen' => $request->input('img_front'),
        ]);

        return redirect()->back()->with('success', 'Camisa registrada correctamente');
    }
}
