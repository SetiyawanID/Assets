@extends('layouts.admin.app')

@section('title', 'Create New Users')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Users</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">

          <a href="{{ route('user.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>

          <div class="card">
              <div class="card-header">
                  <h4>Form Edit User</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('user.update', $user->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name ?? old('name') }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email ?? old('email') }}">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      {{-- <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div> --}}

                      <div class="form-group">
                        <label for="department_id">Choose Department</label>
                        <select name="department_id" id="department_id" class="form-control">
                          <option disabled selected>-- Choose Department --</option>
                          @foreach ($departments as $department)
                          <option {{ $department->id == $user->department_id ? 'selected' : '' }} value="{{ $department->id }}">{{ $department->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" name="job_title" id="job_title" class="form-control @error('job_title') is-invalid @enderror" value="{{ $user->job_title ?? old('job_title') }}">
                        @error('job_title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>
                      
                      <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control">
                          {{-- <option disabled selected>-- Choose Role --</option> --}}
                          <option hidden {{ $user->role ? 'selected' : '' }} value="{{ $user->role }}">
                            @if($user->role == "1")
                                        ADMIN
                                    @elseif ($user->role == "2")
                                        USER
                                    @elseif ($user->role == "3")
                                        MANAJER IT
                                    @endif
                        </option>
                          <option value="3">MANAJER IT</option>
                          <option value="1">ADMIN</option>
                          <option value="2">USER</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-success">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection