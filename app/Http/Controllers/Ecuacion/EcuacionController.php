<?php

namespace App\Http\Controllers\Ecuacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class EcuacionController extends Controller
{

    public function index(Request $request) { 
        return view('euacion.index');
     
    }

    public function store(Request $request){
        return $request->all();
    }

}
