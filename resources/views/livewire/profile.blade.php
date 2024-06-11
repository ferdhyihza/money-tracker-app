<div>
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>User Profile</h3>
          <p class="text-subtitle text-muted">Profile information</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a wire:navigate href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="page-content">
    <section class="section">
      <div class="row">
        <div class="col-12 col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-center align-items-center flex-column">
                <div class="avatar avatar-2xl">
                  <img src="/template/assets/compiled/jpg/2.jpg" alt="Avatar">
                </div>

                <h3 class="mt-3">John Doe</h3>
                <p class="text-small">john@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-8">
          <div class="card">
            <div class="card-body">
              <form action="#" method="get">
                <div class="form-group">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" value="John Doe">
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" value="john.doe@example.net">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary float-end mt-3">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
