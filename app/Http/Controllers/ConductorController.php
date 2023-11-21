<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Conductor; 
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function mostrarPerfil($id) {
        $conductor = Conductor::find($id);

        return view('perfilConductor', ['conductor' => $conductor]);
    }
}


