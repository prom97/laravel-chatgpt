<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreChatRequest;


class ChatGptStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreChatRequest $request, string $id = null)
    {
        $messages = [];
        if($id){
            $chat = Chat::findOrFail($id);
            $messages = $chat->context;
        }
        $messages[] = ['role' => 'user', 'content' => $request->input('promt')];
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);
        $messages[] = ['role' => 'assistant', 'content' => $response->choices[0]->message->content];
        // dd($messages);
        $chat = Chat::updateOrCreate([
            'id' => $id,
            'user_id' => Auth::id() 
        ],[
            'context' => $messages
        ]);
        return redirect()->route('chat.show', [$chat->id]);
    }
}
