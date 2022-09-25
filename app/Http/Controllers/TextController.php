<?php

namespace App\Http\Controllers;

use App\Http\Requests\TextRequest;
use Illuminate\Http\Response;

class TextController extends Controller
{
    public function sendText(TextRequest $request)
    {
        try {
            $data = $request->all();

            return response()->json([
                'mensagem' => $data['text']
            ]);
        } catch (\Exception $e) {
            return response()->json(
                ['error' => $e->getMessage()],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
