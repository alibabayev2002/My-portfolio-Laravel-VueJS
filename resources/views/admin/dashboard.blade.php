@extends('admin.base')
@section('content')
        <h2 class="text-center"><b>DASHBOARD</b></h2><br>
        <div class="w-100 row mx-0 justify-content-between">
            <div class="card col-4 text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Categories</div>
                <div class="card-body">
                  <h5 class="card-title">{{$categories}} categories field</h5>
                  <p class="card-text">En son maraqli kateqoriyasi eklendi</p>
                </div>
              </div>
              <div class="card col-4 text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">Posts</div>
                <div class="card-body">
                  <h5 class="card-title">{{$posts}} post movcuddur</h5>
                  <p class="card-text">En son 29.10.3020 tarixinde post paylasilib</p>
                </div>
              </div>
              <div class="card col-4 text-white bg-success mb-3" style="max-width: 20rem;">
                <div class="card-header">Admin</div>
                <div class="card-body">
                  <h5 class="card-title">Bu hele demo versiyadir!</h5>
                  <p class="card-text">En son 29.10.3020 tarixinde giris edilmisdir.</p>
                </div>
              </div>
            </div>
@endsection