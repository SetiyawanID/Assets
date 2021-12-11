@extends('layouts.admin.app')

@section('title', 'Manager Report Print')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manager Report Print</h1>
  </div>
  <div class="section-body">
      <h2 class="section-title">
          Manager Report Print
      </h2>
      <p class="section-lead">
          This page for generate all reports from various resource
      </p>
      <div class="row">
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header"><h4>Asset Report (By Purchase Date)</h4></div>
                  <div class="card-body">
                    <form action="{{ route('asset.print') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-print"></i> Generate Report</button>
                    </form>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header"><h4>License Report (By Purchase Date)</h4></div>
                  <div class="card-body">
                    <form action="{{ route('license.print') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-print"></i> Generate Report</button>
                    </form>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h4>Maintenance Report (By Created Date)</h4></div>
                <div class="card-body">
                  <form action="{{ route('maintenance.print') }}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="start_date">Start Date</label>
                          <input type="date" class="form-control" id="start_date" name="start_date">
                      </div>
                      <div class="form-group">
                          <label for="end_date">End Date</label>
                          <input type="date" class="form-control" id="end_date" name="end_date">
                      </div>
                      <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-print"></i> Generate Report</button>
                  </form>
                </div>
            </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                      <h4>Vendor Report</h4>
                  </div>
                  <div class="card-body">
                      <a href="{{ route('vendor.print') }}" class="btn btn-primary btn-lg"><i class="fas fa-print"></i> Generate Report</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection