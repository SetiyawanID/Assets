@extends('layouts.admin.app')

@section('title', 'Licenses')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Licenses</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-8 col-lg-8">

          <a href="{{ route('license.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Create new license</a>
          <a href="{{ route('license.export_mapping') }}" class="btn btn-info mb-4"><i class="fas fa-print"></i> Export Excel</a>


          <div class="d-flex justify-content-center">
            <form class="form-inline" method="POST" action="{{ route('license.print') }}">
                @csrf
                <label class="sr-only" for="start_date">Start Date</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Start Date</div>
                  </div>
                  <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date">
                  @error('start_date')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>

                <label class="sr-only" for="end_date">End Date</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">End Date</div>
                  </div>
                  <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date">
                  @error('end_date')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              
                <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-print"></i> Print</button>
              </form>
          </div>

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
                  <h4>License Lists</h4>
              </div>
              <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>License ID</th>
                            <th>Owner</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($licenses as $license)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $license->name }}</td>
                                <td>{{ $license->brand->name }}</td>
                                <td>{{ $license->license_number }}</td>
                                <td>{{ $license->user->name }}</td>
                                <td>
                                    <a href="{{ route('license.edit', $license) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('license.destroy', $license) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure wanna delete {{ $license->name }} ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ asset('backend/assets/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    
    <script>
         $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
@endpush