<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Form extends Component
{
    use \App\Services\Traits\SendMessage;

    public $showForm = false;
    public $productName;
    public $user;

    public $messageText = '';
    public $messageSubject = '';

    protected $listeners = ['show'];

    public function show($productName = false)
    {
        $this->showForm = true;
        $this->productName = $productName;
    }

    public function submitEmail()
    {
        $message = $this->messageText . PHP_EOL .
            'Телефон: ' . $this->user['tel'] . PHP_EOL .
            'Email: ' . $this->user['email'] . PHP_EOL .
            'Продукт: ' . $this->productName;
        $this->sendMessageToAdmin($message, ' Вопрос по подписке ' . $this->messageSubject);
        session()->flash('message', 'Сообщение отправлено');
        $this->showForm = false;
        redirect()->route('account');
    }

    public function render()
    {
        return view('livewire.form');
    }
}
