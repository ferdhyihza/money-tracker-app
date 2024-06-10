<?php

namespace App\Livewire\Accounts;

use App\Models\Account;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;

class AccountList extends Component
{

    #[Title('Account')]

    public function render()
    {
        return view('livewire.accounts.account-list', [
            'accounts' => Account::all(),
            'types' => Account::select('type', DB::raw('sum(balance) as total_balance'))->groupBy('type')->get()
        ]);
    }
}
