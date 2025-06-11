<?php

namespace App\Livewire;

use Livewire\Component;

class FlashMessage extends Component
{
    public $message = 'Saved.';
    public $show = false;

    protected $listeners = ['showFlashMessage' => 'showMessage'];

    public function showMessage($message = null)
    {
        $this->message = $message ?? 'Saved.';
        $this->show = true;

        $this->dispatchBrowserEvent('flash-message-shown');
    }



    public function render()
    {
        return view('livewire.flash-message');
    }
}
