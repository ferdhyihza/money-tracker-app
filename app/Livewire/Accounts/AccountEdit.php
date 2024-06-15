<?php

namespace App\Livewire\Accounts;

use App\Models\Account;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class AccountEdit extends Component
{

    #[Title('Edit Account')]

    #[Validate('required')]
    public $name;
    public $user_id = 1;

    #[Validate('required')]
    public $type;

    #[Validate('required|numeric')]
    public $balance;

    public $account;

    public function mount($id)
    {
        $this->account = Account::find($id);
        $this->name = $this->account->name;
        $this->type = $this->account->type;
        $this->balance = $this->account->balance;
    }

    public function render()
    {
        return view('livewire.accounts.account-edit', [
            'types' => Account::select('type')->distinct()->get()
        ]);
    }

    public function update()
    {
        $this->validate();
        // dd($this->all());
        $this->account->update($this->all());
        return $this->redirect(route('accounts.index'), navigate: true);
    }
}
