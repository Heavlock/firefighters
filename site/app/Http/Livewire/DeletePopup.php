<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeletePopup extends Component
{
    public $showProp = false;
    public $delSubscribeId;

    protected $listeners = ['show'];

    public function show($delSubscribeId = 0)
    {
        $this->showProp = true;
        $this->delSubscribeId = $delSubscribeId;
    }

    public function delete()
    {
        $this->emitTo('user-account', 'delete', $this->delSubscribeId);
        $this->showProp = false;
    }

    public function render()
    {
        return view('livewire.delete-popup');
    }
}
