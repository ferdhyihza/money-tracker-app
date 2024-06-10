<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Account extends Component
{
    #[Title('Account')]

    public function render()
    {
        return view('livewire.account');
    }
}
