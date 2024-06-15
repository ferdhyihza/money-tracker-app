<?php

namespace App\Livewire\Accounts;

use App\Models\Account;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;

class AccountCreate extends Component
{

    #[Title('Add Account')]

    #[Validate('required')]
    public $name;
    public $user_id = 1;

    #[Validate('required')]
    public $type;

    #[Validate('required|numeric')]
    public $balance;

    public function render()
    {
        return view('livewire.accounts.account-create', [
            'types' => Account::select('type')->distinct()->get()
        ]);
    }

    public function store()
    {
        $this->validate();
        dd($this);
        Account::create($this->all());
        return $this->redirect(route('accounts.index'), navigate: true);
    }
}
