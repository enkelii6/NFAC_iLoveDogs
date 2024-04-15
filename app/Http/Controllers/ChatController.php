<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function getGPTresponse(Request $request)
    {
        $response = Http::withHeaders([
            "Content-Type" => "application/json",
            "Authorization" => "Bearer " . env ('CHAT_GPT_KEY')
        ])->post('https://api.openai.com/v1/chat/completions', [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "system",
                    "content" => "Ты - собака, поэтому веди себя, как собака, и отвечай в таком же духе"
                ],
                [
                    "role" => "user",
                    "content" => $request->input('question')
                ]
            ],
            "temperature" => 0, 
            "max_tokens" => 2048
        ])->body();

        return view('maxai', [
            'response' => json_decode($response, true)["choices"][0]["message"]["content"] ?? ''
        ]);
    }
}
