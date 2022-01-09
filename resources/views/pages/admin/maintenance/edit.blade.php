@extends('layouts.admin.app')

@section('title', 'Edit Maintenance')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Asset on Maintenance - {{ $maintenance->asset->asset_tag }}</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">

          <a href="{{ route('maintenance.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>

          <div class="card">
              <div class="card-header">
                  <h4>Form Edit Asset on Maintenance</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('maintenance.update', $maintenance) }}" method="POST">
                      @csrf
                      @method('put')

                      <div class="form-group">
                          <label>Status</label>
                          <select name="status" id="status" class="form-control">
                              <option disabled selected>-- Choose Status --</option>
                              <option {{ $maintenance->status == 1 ? 'selected' : '' }} value="1">Pending</option>
                              <option {{ $maintenance->status == 2 ? 'selected' : '' }} value="2">On-Progress</option>
                              <option {{ $maintenance->status == 3 ? 'selected' : '' }} value="3">Done</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="description" cols="5" class="form-control @error('description') is-invalid @enderror">{{ $maintenance->description ?? old('description') }}</textarea>
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