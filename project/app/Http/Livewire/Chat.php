<?php

namespace App\Http\Livewire;
use App\Models\Message;
use App\Models\User;

use Livewire\Component;

class Chat extends Component
{

        public $messageText;

        public function render()
        {
            $messages = Message::with('user')->latest()->take(10)->get()->sortBy('id');
            $users = User::where('id',$messages[0]->user_id)->first();
            $userid= $users->id;
            $userfname= $users->Fname;
            return view('livewire.chat',['messages'=>$messages,'userid'=>$userid,'userfname'=>$userfname]);
        }

        public function sendMessage()
        {
            Message::create([
                'user_id' =>User::find('id'),
                'message_text' => $this->messageText,
            ]);

            $this->reset('messageText');
        }
    }


