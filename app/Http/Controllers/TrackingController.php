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
        $trakings = Frete::where('codigo_rastreio', '382451')->first();

             return view('frete.tracking', [
            'trakings' => $trakings
        ]);
    }
}
