<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;

use Livewire\Component;

class Chat extends Component
{

    public $messageText;

    public function render(User $user)
    {
        $messages = Message::with('user')->latest()->take(10)->get()->sortBy('id');
        $users = User::where('id', $messages[0]->user_id)->first();
        $userid = $users->id;
        $userfname = $users->Fname;
        $message = new Message;
        $message->user_id = '1';
        $message->message_text = 'hi';
        $message->save();

        $this->reset('messageText');

        return view('livewire.chat', ['messages' => $messages, 'userid' => $userid, 'userfname' => $userfname]);
    }
    // public function Send(){
    //     $message = new Message;
    //     $message->user_id = $this->user_id;
    //     $message->message_text = $this->messageText;
    //     $message->save();
    //     // Message::create([
    //     //             'user_id' => '1',
    //     //             'message_text' => $this->messageText,
    //     //         ]);

    // }

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
}
