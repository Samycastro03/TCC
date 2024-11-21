<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::whereBetween('data', [
            now()->startOfWeek(),
            now()->endOfWeek()
        ])->get();

        return response()->json($eventos);
    }

    public function store(Request $request)
    {
        $evento = Evento::create($request->all());

        return response()->json($evento);
    }
}
