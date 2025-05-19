<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatrixController extends Controller
{
    // Mostrar formulario
    public function showForm()
    {
        return view('matrix.form');
    }

    // Procesar formulario
    public function processForm(Request $request)
    {
        // Validar que nos lleguen 9 valores (para matriz 3x3)
        $request->validate([
            'matrix.*' => 'required|numeric',
        ]);

        // La matriz vendrá como un array plano, la organizamos en 3x3
        $flatMatrix = $request->input('matrix');

        $matrix = array_chunk($flatMatrix, 3);

        return view('matrix.index', compact('matrix'));
    }
}
