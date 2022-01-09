@extends('layouts.admin.app')

@section('title', 'Create New Assets')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add New Asset</h1>
  </div>
  
  <div class="row">
      <div class="col-10 col-md-10 col-lg-10">

          <a href="{{ route('asset.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>

          <div class="card">
              <div class="card-header">
                  <h4>Form New Asset</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('asset.store') }}" method="POST">
                      @csrf

                      <div class="form-group">
                        <label>Asset Name</label>
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
                        <label>Location</label>
                        <select class="form-control select2" name="location_id">
                          @foreach ($locations as $location)
                              <option value="{{ $location->id }}">{{ $location->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Serial Number</label>
                        <input type="text" name="serial_number" id="serial_number" class="form-control @error('serial_number') is-invalid @enderror" value="{{ old('serial_number') }}">
                        @error('serial_number')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Type Assets</label>
                        <select class="form-control select2" name="type_id">
                          @foreach ($types as $type)
                              <option value="{{ $type->id }}">{{ $type->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Cost</label>
                        <input type="number" min="0" name="cost" id="cost" class="form-control @error('cost') is-invalid @enderror" value="{{ old('cost') }}">
                        @error('cost')
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
                        <label>Warranty</label>
                        <input type="date" name="warranty" id="warranty" class="form-control @error('warranty') is-invalid @enderror" value="{{ old('warranty') }}">
                        @error('warranty')
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