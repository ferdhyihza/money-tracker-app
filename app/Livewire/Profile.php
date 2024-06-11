<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Profile extends Component
{

    #[Title('Profil')]

    public function render()
    {
        return view('livewire.profile');
    }
}
