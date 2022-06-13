<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;
class Chat extends Component
{

    public $messageText;

    public function render(Request $request)
    {
        $messages = Message::with('user')->latest()->take(10)->get()->sortBy('id');
        $users = User::where('id', $messages[0]->user_id)->first();
        $userid = $users->id;
        $userfname = $users->Fname;
        return view('livewire.chat', ['messages' => $messages, 'userid' => $userid, 'userfname' => $userfname]);
    }
    public function send(Request $request){
        $message = new Message;
        $message->user_id = session('id');
        $message->message_text = $request->messageText;
        $message->save();
        return redirect('/chat');
    }


}

    // public function sendMessage(User $user)
    // {
    //     $message = new Message;
    //     dd($message->user_id);
    // //     Message::create([
    // //         'user_id' => $user->find('id'),
    // //         'message_text' => $this->messageText,
    // //     ]);

    // //     $this->reset('messageText');
    // // }
    // $message = new Message;
    // dd($message);
    // }
