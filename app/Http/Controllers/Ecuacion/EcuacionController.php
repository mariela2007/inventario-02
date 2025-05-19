<?php

namespace App\Http\Controllers\Ecuacion; 
use App\Http\Helpers\Ecuacion; 
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request; 
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class EcuacionController extends Controller


{
    public function index(Request $request): View
    {
        $respuesta = session('respuesta');
        return view('ecuacion.index', compact('respuesta'));
    }

    public function store(Request $request): RedirectResponse
    {
        // Validar entrada
        $request->validate([
            'a' => 'required|numeric|not_in:0', // Evita división por cero
            'b' => 'required|numeric',
        ]);

        // Convertir a float
        $a = (float) $request->input('a');
        $b = (float) $request->input('b');

        // Resolver la ecuación
        $ecuacion = new Ecuacion($a, $b);
        $respuesta = $ecuacion->resultado();

        // Guardar respuesta en la sesión
        session(['respuesta' => $respuesta]);

        // Redirigir de nuevo al formulario
        return redirect()->route('ecuacion.index');
    }
    
}