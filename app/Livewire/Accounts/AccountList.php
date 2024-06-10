<?php

namespace App\Livewire\Accounts;

use Livewire\Component;
use Livewire\Attributes\Title;

class AccountList extends Component
{

    #[Title('Account')]

    public function render()
    {
        return view('livewire.accounts.account-list');
    }
}
