@extends('layouts.admin.app')

@section('title', 'Change Password')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Change Password</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
          
        @if (Session::has('success'))
          <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>×</span>
              </button>
              {!! Session('success') !!}
            </div>
          </div>
            @endif

          <div class="card">
              <div class="card-header">
                  <h4>Edit Password</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('user.password.update') }}" method="POST">
                      @csrf
                      @method('PATCH')
                      <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current_password">
                        @error('current_password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
      
                    <div class="form-group">
                      <label for="password">New Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
      
                    <div class="form-group">
                      <label for="password-confirm">Confirm New Password</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                      <button type="submit" class="btn btn-success">Update</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection