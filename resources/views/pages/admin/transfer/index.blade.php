@extends('layouts.admin.app')

@section('title', 'Transfer Assets Requests')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Asset Transfer Request</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-10 col-lg-10">

          @if (Auth::user()->role == "2" || Auth::user()->role == "3")
             <a href="{{ route('transfer.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Create New Request</a>
          @endif
         

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
                  <h4>Request Lists</h4>
              </div>
              <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Asset Name</th>
                            <th>User Destination</th>
                            <th>Reason</th>
                            <th>Status</th>
                            @if (Auth::user()->role == '1')
                              <th>Action</th>
                            @endif
                            
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($transfers as $transfer)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $transfer->asset->name }}</td>
                          <td>{{ $transfer->user->name }}</td>
                          <td>{{ $transfer->reason }}</td>
                          <td>
                            @if ($transfer->status == "1")
                              <span class="badge badge-warning">Pending</span>
                            @else
                              <span class="badge badge-success">Done</span>
                            @endif
                          </td>

                            @if(Auth::user()->role == '1')
                            <td>
                              @if ($transfer->status == '1')
                                  <a href="{{ route('transfer.status', $transfer) }}?status=2" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Mark as Done</a>
                              @endif
                              <form action="{{ route('transfer.destroy', $transfer) }}" method="POST" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want delete this data?');">
                                      <i class="fa fa-trash"></i> Delete Request
                                  </button>
                              </form>
                          </td>
                          @endif
                        </tr>
                      @endforeach
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