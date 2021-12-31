@extends('layouts.admin.app')

@section('title', 'Users')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Users</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-12 col-lg-12">

          <a href="{{ route('user.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Create new user</a>

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
                  <h4>User Lists</h4>
              </div>
              <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Job Title</th>
                            <th>Department Name</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->job_title }}</td>
                                <td>{{ $user->department->name }}</td>
                                <td>
                                    @if($user->role == "1")
                                        <span class="badge badge-secondary">ADMIN</span>
                                    @elseif ($user->role == "2")
                                        <span class="badge badge-dark">USER</span>
                                    @elseif ($user->role == "3")
                                        <span class="badge badge-danger">MANAJER IT</span>
                                    @endif
                                </td>
                                <td>
                                    {{-- <a href="{{ route('user.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                                    <form action="{{ route('user.destroy', $user) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure wanna delete {{ $user->name }} ?')">Delete</button>
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