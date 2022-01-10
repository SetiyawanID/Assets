@extends('layouts.admin.app')

@section('title', 'Details Assets')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>{{ $asset->name }}</h1>
  </div>
  
  <div class="row">
      <div class="col-8 col-md-8 col-lg-8">


        @if (Auth::user()->role == "1")
            <a href="{{ route('asset.index') }}" class="btn btn-info mb-4"><i class="fas fa-chevron-circle-left"></i> Back</a>
          @endif


          <div class="card shadow-sm">
              <div class="card-body">
                  <table class="table">
                      <tr>
                          <th class="bg-secondary" width="15%">Type</th>
                          
                          <td>{{ $asset->typeAsset->name }}</td>
                      </tr>
                      <tr>
                        <th class="bg-secondary">Serial Number</th>
                        
                        <td>{{ $asset->serial_number }}</td>
                    </tr>
                    <tr>
                        <th class="bg-secondary">Asset Tag</th>
                        
                        <td>{{ $asset->asset_tag }}</td>
                    </tr>
                    <tr>
                        <th class="bg-secondary">Brand</th>
                        
                        <td>{{ $asset->brand->name }}</td>
                    </tr>
                    <tr>
                        <th class="bg-secondary">Cost</th>
                        
                        <td>@currency($asset->cost)</td>
                    </tr>
                    <tr>
                        <th class="bg-secondary">Location</th>
                        
                        <td>{{ $asset->location->name }}</td>
                    </tr>
                    <tr>
                        <th class="bg-secondary">Owner</th>
                        
                        <td>{{ $asset->user->name }}</td>
                    </tr>
                    <tr>
                        <th class="bg-secondary">Purchase Date</th>
                        
                        <td>{{ $asset->purchase_date }}</td>
                    </tr>
                    <tr>
                        <th class="bg-secondary">Warranty Void</th>
                        
                        <td>{{ $asset->warranty }}</td>
                    </tr>
                    <tr>
                        <th class="bg-secondary">Description</th>
                        
                        <td>{{ $asset->description }}</td>
                    </tr>
                  </table>
              </div>
          </div>
      </div>
      <div class="col-4 col-md-4 col-lg-4 mt-5">
        <div class="card p-4 shadow-sm mt-2">
            <div class="visible-print text-center">
                {!! QrCode::size(200)->generate(Request::url()); !!}
                <h5 class="mt-4">{{ $asset->name }}</h3>
            </div>
        </div>
      </div>
  </div>
</section>
@endsection
