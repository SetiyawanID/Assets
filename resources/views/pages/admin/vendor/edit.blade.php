@extends('layouts.admin.app')

@section('title', 'Edit Vendors')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Vendors</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <a href="{{ route('vendor.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>
          <div class="card">
              <div class="card-header">
                  <h4>Form Edit Vendor</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('vendor.update', $vendor) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $vendor->name ?? old('name') }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ $vendor->address ?? old('address') }}">
                        @error('address')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $vendor->email ?? old('email') }}">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ $vendor->phone_number ?? old('phone_number') }}">
                        @error('phone_number')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <button type="submit" class="btn btn-success">Update</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection