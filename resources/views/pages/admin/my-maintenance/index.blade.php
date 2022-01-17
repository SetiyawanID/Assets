@extends('layouts.admin.app')

@section('title', 'Maintenances')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>My Assets on Maintenance</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-12 col-lg-12">

          <div class="card">
              <div class="card-header">
                  <h4>Maintenance Lists</h4>
              </div>
              <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Asset Tag</th>
                            <th>Asset Name</th>
                            <th>Vendor Name</th>
                            <th>Problem</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($maintenances as $maintenance)

                        @dd($maintenance);

                            {{-- <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $maintenance->asset_tag }}</td>
                                <td>{{ $maintenance->name }}</td> --}}

                                {{-- <td>{{ $maintenance->vendor->name }}</td>
                                <td>{{ $maintenance->problem }}</td>
                                <td>
                                    @if($maintenance->status == "1")
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif ($maintenance->status == "2")
                                        <span class="badge badge-info">On-Progress</span>
                                    @elseif ($maintenance->status == "3")
                                        <span class="badge badge-success">Done</span>
                                @endif
                                </td> --}}

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