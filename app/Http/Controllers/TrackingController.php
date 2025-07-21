<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Frete;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Handle the incoming request.
     */ 
    public function __invoke(Request $request)
    {

        $codRastreio = $request->input('codigo_rastreio');
        

        $trakings = Frete::where('codigo_rastreio', $codRastreio)
        ->with('etapas')
        ->first();

        $trakings->etapas;

             return view('frete.tracking', [
            'trakings' => $trakings
        ]);
    }
}
