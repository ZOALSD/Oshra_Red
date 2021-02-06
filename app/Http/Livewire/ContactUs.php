<?php

namespace App\Http\Livewire;

use App\Model\Contact;
use Livewire\Component;

class ContactUs extends Component
{

    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:6',
        'email' => 'required|string|email',
        'message' => 'required|string',
    ];
    protected $messages = [
        'name.required' => 'الاسم مطلوب يجب ان يكون من 6 حروف علي الاقل',
        'email.required' => 'مطلوب كتابت البريد الالكتروني',
        'message.required' => 'مطلوب كتابت محتوى الرسالة',
        'email.email' => 'مطلوب بريد الالكتروني',
    ];

    function empty() {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.contact-us');
    }

    public function save()
    {

        Contact::create($this->validate());
        $this->empty();
        session()->flash('message', 'Post successfully updated.');

    }
}
