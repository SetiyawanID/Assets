@extends('layouts.admin.app')

@section('title', 'Create New Request')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Create New Request</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">

          <a href="{{ route('transfer.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>

          <div class="card">
              <div class="card-header">
                  <h4>Form New Request</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('transfer.store') }}" method="POST">
                      @csrf

                      <div class="form-group">
                        <label>Asset Name</label>
                        <select class="form-control select2" name="asset_id">
                          @foreach ($assets as $asset)
                              <option value="{{ $asset->id }}">{{ $asset->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>User Destination</label>
                        <select class="form-control select2" name="user_id">
                          @foreach ($users as $user)
                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Reason</label>
                        <input type="text" name="reason" id="reason" class="form-control @error('reason') is-invalid @enderror" value="{{ old('reason') }}">
                        @error('reason')
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