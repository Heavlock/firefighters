<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserAccount extends Component
{
    public $user;
    public $title = 'личный кабинет';
    protected $listeners = ['delete'];

    public function delete($delSubscribeId)
    {
        $this->user->subscriptions()->find($delSubscribeId)->delete();
    }

    public function render()
    {
        $this->user = User::where('id', auth()->id())->with('products')->with('subscriptions')->first();
        return view('livewire.user-account', ['user' => $this->user->toArray()])->extends('master')->layoutData(['title' => $this->title]);
    }
}
