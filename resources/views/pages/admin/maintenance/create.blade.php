@extends('layouts.admin.app')

@section('title', 'Create New Maintenance')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add New Asset Maintenance</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">

          <a href="{{ route('maintenance.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>

          <div class="card">
              <div class="card-header">
                  <h4>Form New Asset on Maintenance</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('maintenance.store') }}" method="POST">
                      @csrf

                      <div class="form-group">
                        <label>Asset Tag</label>
                        <select class="form-control select2" name="asset_id">
                          @foreach ($assets as $asset)
                              <option value="{{ $asset->id }}">{{ $asset->asset_tag }}</option>
                          @endforeach
                        </select>
                      </div>

                      
                      <div class="form-group">
                        <label>Vendor Name</label>
                        <select class="form-control select2" name="vendor_id">
                          @foreach ($vendors as $vendor)
                              <option value="{{ $vendor->id }}">{{ $vendor->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                          <label>Problem</label>
                          <textarea name="problem" id="problem" cols="5" class="form-control @error('description') is-invalid @enderror">{{ old('problem') }}</textarea>
                          @error('problem')
                            <span class="invalid-feedback">{{ $message }}</span>
                         @enderror
                      </div>

                      <div class="form-group">
                          <label>Status</label>
                          <select name="status" id="status" class="form-control">
                              <option disabled selected>-- Choose Status --</option>
                              <option value="1">Pending</option>
                              <option value="2">On-Progress</option>
                              <option value="3">Done</option>
                          </select>
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