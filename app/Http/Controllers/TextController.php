<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index(Request $request)
    {
      $text = $request->text;
      
      return response()->json([
            'mensagem' => $text
        ]);
    }
}