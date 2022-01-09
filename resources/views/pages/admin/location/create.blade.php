@extends('layouts.admin.app')

@section('title', 'Create New Locations')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add New Location</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">

          <a href="{{ route('location.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>

          <div class="card">
              <div class="card-header">
                  <h4>Form New Location</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('location.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Location Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">
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