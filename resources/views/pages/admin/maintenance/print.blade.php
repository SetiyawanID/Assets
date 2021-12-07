<!DOCTYPE html>
<html>
<head>
	<title>Maintenances - Recap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<img src="https://i.postimg.cc/mZXMFpb7/kop.png" alt="kop_surat">
		<center>
			<h4>Maintenances Recap</h4>
		</center>
		<br/>
		<p><b>Periode</b> : {{ \Carbon\Carbon::parse($start_date)->isoFormat('D MMMM Y') }} - {{ \Carbon\Carbon::parse($end_date)->isoFormat('D MMMM Y') }}</p>

		<div class="table-responsive">
      <table class='table table-bordered'>
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Asset Tag</th>
					<th class="text-center">Vendor Name</th>
					<th class="text-center">Problem</th>
                    <th class="text-center">Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($maintenances as $maintenance)
				<tr>
					<td class="align-middle text-center">{{ $loop->iteration }}</td>
					<td class="align-middle text-center">{{ $maintenance->asset->asset_tag }}</td>
					<td class="align-middle text-center">{{ $maintenance->vendor->name }}</td>
					<td class="align-middle text-center">{{ $maintenance->problem }}</td>
					<td class="align-middle text-center">
                        @if($maintenance->status == "1")
                            <span class="badge badge-warning">Pending</span>
                        @elseif ($maintenance->status == "2")
                            <span class="badge badge-info">On-Progress</span>
                        @elseif ($maintenance->status == "3")
                            <span class="badge badge-success">Done</span>
                        @endif
                    </td>
				</tr>
				@endforeach
			</tbody>
		</table>
    </div>

</body>
</html>