<div>
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Edit Account</h3>
          <p class="text-subtitle text-muted">Edit your account</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a wire:navigate href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page"><a wire:navigate href="{{ route('accounts.index') }}">Account</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Account</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="page-content">
    <section class="section">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <form wire:submit.prevent='update' method="post" class="form form-vertical">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input wire:model="name" type="text" id="name" class="form-control" name="name" placeholder="Account Name">
                      @error('name')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group" wire:ignore>
                      <label for="type">Type</label>
                      <select wire:model="type" id="type" class="form-control" data-placeholder="Choose Type">
                        <option></option>
                        @foreach ($types as $type)
                        <option value="{{ $type->type }}">{{ $type->type }}</option>
                        @endforeach
                      </select>
                    </div>
                    @error('type')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="balance">Balance</label>
                      <input wire:model='balance' type="number" id="balance" class="form-control" name="balance" placeholder="Rp 0,00">
                      @error('balance')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2 mt-2">Update</button>
                    <a wire:navigate href="{{ route('accounts.index') }}" class="btn btn-light-secondary mt-2">Cancel</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    $(document).ready(function() {
      $('#type').select2({
        tags: true
        , theme: 'bootstrap4'
        , placeholder: $(this).data('placeholder')

      });
      $('#type').on('change', function(e) {
        var data = $(this).select2("val");
        @this.set('type', data);
      })
    })

  </script>
</div>
