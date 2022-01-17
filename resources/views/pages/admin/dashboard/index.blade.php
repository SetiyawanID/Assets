@extends('layouts.admin.app')

@section('title', 'Dashboard Assets')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  @if(Auth::user()->role == 1)
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary" onclick="location.href='{{ 'admin/user' }}';" style="cursor: pointer;">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Employees</h4>
          </div>
          <div class="card-body">
            {{ $employee }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger" onclick="location.href='{{ 'admin/maintenance' }}';" style="cursor: pointer;">
          <i class="fas fa-wrench"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Assets on Maintenance</h4>
          </div>
          <div class="card-body">
            {{ $maintenance }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning" onclick="location.href='{{ 'admin/license' }}';" style="cursor: pointer;">
          <i class="fas fa-id-badge"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Licenses</h4>
          </div>
          <div class="card-body">
            {{ $license }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success" onclick="location.href='{{ 'admin/asset' }}';" style="cursor: pointer;">
          <i class="fas fa-boxes"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Assets</h4>
          </div>
          <div class="card-body">
          {{ $asset }}
          </div>
        </div>
      </div>
    </div>                  
  </div>
  @else
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success" onclick="location.href='{{ route('myasset.index', auth()->user()->id) }}';" style="cursor: pointer;">
          <i class="fas fa-boxes"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>My Assets</h4>
          </div>
          <div class="card-body">
            {{ $myAsset }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning" onclick="location.href='{{ route('mylicense.index', auth()->user()->id) }}';" style="cursor: pointer;">
          <i class="fas fa-id-badge"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>My Licenses</h4>
          </div>
          <div class="card-body">
            {{ $myLicense }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning" onclick="location.href='{{ route('mymaintenance.index', auth()->user()->id) }}';" style="cursor: pointer;">
          <i class="fas fa-wrench"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>My Assets on Maintenance</h4>
          </div>
          <div class="card-body">
            {{ $myMaintenance }}
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
</section>
@endsection