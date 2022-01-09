@extends('layouts.admin.app')

@section('title', 'Edit Departments')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Department</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <a href="{{ route('department.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>
          <div class="card">
              <div class="card-header">
                  <h4>Form Edit Department</h4>
              </div>
              <div class="card-body">
                  <form action="{{ route('department.update', $department) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label>Department Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $department->name ?? old('name') }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ $department->description ?? old('description') }}">
                        @error('description')
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