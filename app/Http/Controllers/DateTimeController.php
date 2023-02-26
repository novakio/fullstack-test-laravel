<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DateTimeController extends Controller
{
    public function index(Request $request)
    {
      $date_time = now();
      $formated_date = $date_time->format('d/m/Y H:i:s');

      return response()->json([
            'mensagem' => $formated_date
        ]);
    }
}