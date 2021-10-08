<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        return view('livewire.contact-component');
    }
    public $name,$email,$subject,$comment;

    public $success;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'subject'=>'required|min:2',
        'comment' => 'required|min:2',
    ];
    private function clearFields()
    {

        $this->name = '';
        $this->email = '';
        $this->subject='';
        $this->comment = '';

    }

    public function sendEmail(){
        $this->validate();


        Mail::send('emails.contact-form',
            array(
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'comment' => $this->comment,
            ),

            function($message){
                $message->from('chakerblackma@gmail.com');
                $message->to('chakerblackma@gmail.com', 'Chaker')->subject('My porfolio website');
            }
        );

        $this->success = 'Thank you for reaching out to us!';

        $this->clearFields();
    }
}
