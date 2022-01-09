@extends('layouts.admin.app')

@section('title', 'Create New License')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add New License</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">

          <a href="{{ route('license.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>

          <div class="card">
              <div class="card-header">
                  <h4>Form New license</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('license.store') }}" method="POST">
                      @csrf

                      <div class="form-group">
                        <label>License Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Owner</label>
                        <select class="form-control select2" name="user_id">
                          @foreach ($users as $user)
                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control select2" name="brand_id">
                          @foreach ($brands as $brand)
                              <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>License ID</label>
                        <input type="text" name="license_number" id="license_number" class="form-control @error('license_number') is-invalid @enderror" value="{{ old('license_number') }}">
                        @error('license_number')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                      <div class="form-group">
                        <label>Purchase Date</label>
                        <input type="date" name="purchase_date" id="purchase_date" class="form-control @error('purchase_date') is-invalid @enderror" value="{{ old('purchase_date') }}">
                        @error('purchase_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" id="description" cols="5" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                          @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <button type="submit" class="btn btn-success">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ asset('backend/assets/modules/select2/dist/css/select2.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ asset('backend/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
@endpush