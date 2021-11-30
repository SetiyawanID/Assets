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
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Employee</h4>
          </div>
          <div class="card-body">
            {{ $employee }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-wrench"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Maintenance</h4>
          </div>
          <div class="card-body">
            {{ $maintenance }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-id-badge"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>License</h4>
          </div>
          <div class="card-body">
            {{ $license }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-boxes"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Assets</h4>
          </div>
          <div class="card-body">
          {{ $asset }}
          </div>
        </div>
      </div>
    </div>                  
  </div>
  @endif


  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-boxes"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>My Asset</h4>
          </div>
          <div class="card-body">
            {{ $myAsset }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-id-badge"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>My License</h4>
          </div>
          <div class="card-body">
            {{ $myLicense }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-wrench"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>My Asset on Maintenance</h4>
          </div>
          <div class="card-body">
            {{ $myMaintenance }}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection