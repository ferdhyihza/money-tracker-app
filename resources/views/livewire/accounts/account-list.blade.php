<div>
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Account</h3>
          <p class="text-subtitle text-muted">Manage your account</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a wire:navigate href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="page-content">
    <section class="section">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-6">
              <h4 class="card-title">Account List</h4>
            </div>
            <div class="col-6">
              <a wire:navigate href="{{ route('accounts.create') }}" class="btn btn-primary float-end">Add Account</a>
            </div>
          </div>
        </div>
        <div class="card-content">

          <!-- Table with no outer spacing -->
          <div class="table-responsive">
            <table class="table mb-0 table-lg ">
              @foreach ($types as $type)
              <thead>
                <tr class="table-active">
                  <th>{{ $type->type }}</th>
                  <th class="{{ $type->total_balance > 0 ? 'text-success' : 'text-danger' }}">@idr($type->total_balance)</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($accounts as $account)
                @if($type->type == $account->type)
                <tr>

                  <td class="text-ijo"><a wire:navigate href="{{ route('accounts.edit', [$account->id]) }}">{{ $account->name }}</a></td>
                  <td class="{{ $account->balance > 0 ? 'text-success' : 'text-danger' }}"><a wire:navigate href="{{ route('accounts.edit', [$account->id]) }}">@idr($account->balance)</a></td>

                </tr>
                @endif
                @endforeach
              </tbody>
              @endforeach
            </table>
          </div>

        </div>
      </div>
    </section>
  </div>
</div>
