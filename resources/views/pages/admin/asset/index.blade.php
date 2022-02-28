@extends('layouts.admin.app')

@section('title', 'Assets')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Assets</h1>
  </div>
  
  <div class="row">
      <div class="col-12 col-md-12 col-lg-12">

          <a href="{{ route('asset.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Add New Asset</a>
          <a href="{{ route('asset.export_mapping') }}" class="btn btn-info mb-4"><i class="fas fa-print"></i> Export Excel</a>

          <div class="d-flex justify-content-center">
            <form class="form-inline" method="POST" action="{{ route('asset.print') }}">
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
              
                <button type="submit" class="btn btn-primary mb-2 print"><i class="fas fa-print"></i> Print</button>
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
                  <h4>Asset Lists</h4>
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
                            {{-- <th>Brand</th> --}}
                            <th>Owner</th>
                            <th>Warranty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($assets as $asset)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="visible-print text-center img-thumbnail">
                                      {{-- <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(75)->generate(route('asset.show', $asset))) }}"/> --}}
                                      <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge('backend/assets/img/thamrin-logo-small.png', .2, true)->size(75)->generate(route('asset.show', $asset))) }}"/>
                                      {{-- <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge('https://i.ibb.co/Hg13fmM/thamrin-logo.png', .2, true)->size(75)->generate(route('asset.show', $asset))) }}"/> --}}
                                        {{-- {!! QrCode::size(75)->generate(route('asset.show', $asset)); !!} --}}
                                    </div>
                                </td>
                                <td>{{ $asset->asset_tag }}</td>
                                <td>{{ $asset->name }}</td>
                                <td>{{ $asset->typeAsset->name }}</td>
                                {{-- <td>{{ $asset->brand->name }}</td> --}}
                                <td>{{ $asset->user->name }}</td>
                                <td>{{ $asset->warranty }}</td>
                                <td>
                                    <a href="{{ route('asset.edit', $asset) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('asset.show', $asset) }}" class="btn btn-info btn-sm">Detail</a>
                                    <form action="{{ route('asset.destroy', $asset) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure wanna delete {{ $asset->name }} ?')">Delete</button>
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