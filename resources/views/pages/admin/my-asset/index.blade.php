@extends('layouts.admin.app')

@section('title', 'Assets')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>My Assets</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-12 col-lg-12">

          <div class="card">
              <div class="card-header">
                  <h4>My Assets</h4>
              </div>
              <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>QR Code</th>
                            <th>Asset Tag</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Brand</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($assets as $asset)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="visible-print text-center img-thumbnail">
                                        {!! QrCode::size(75)->generate(route('asset.show', $asset)); !!}
                                    </div>
                                </td>
                                <td>{{ $asset->asset_tag }}</td>
                                <td>{{ $asset->name }}</td>
                                <td>{{ $asset->typeAsset->name }}</td>
                                <td>{{ $asset->brand->name }}</td>
                                <td>{{ $asset->location->name }}</td>
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