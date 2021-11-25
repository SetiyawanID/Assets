@extends('layouts.admin.app')

@section('title', 'Departments')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Departments</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-8 col-lg-8">
          <a href="{{ route('department.create') }}" class="btn btn-primary mb-4">Create new department</a>

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
                  <h4>Department Lists</h4>
              </div>
              <div class="card-body p-0">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($departments as $department)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->description }}</td>
                                <td>
                                    <a href="{{ route('department.edit', $department) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('department.destroy', $department) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure wanna delete {{ $department->name }} ?')">Delete</button>
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
    <script src="{{ asset('backend/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/page/modules-datatables.js') }}"></script>
    <script>
         $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
@endpush