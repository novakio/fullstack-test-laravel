<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateTimeController extends Controller
{
    public function dateTime(Request $request)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d/m/Y H:i:s');
        return response()->json([
            'mensagem' => $date
        ]);
    }
}
