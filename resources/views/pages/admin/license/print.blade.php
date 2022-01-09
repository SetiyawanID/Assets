<!DOCTYPE html>
<html>
<head>
	<title>Licenses - Recap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<img src="https://i.postimg.cc/mZXMFpb7/kop.png" alt="kop_surat">
		<center>
			<h4>Licenses Recap</h4>
		</center>
		<br/>
		<p><b>Periode</b> : {{ \Carbon\Carbon::parse($start_date)->isoFormat('D MMMM Y') }} - {{ \Carbon\Carbon::parse($end_date)->isoFormat('D MMMM Y') }}</p>

		<div class="table-responsive">
      <table class='table table-bordered'>
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Name</th>
					<th class="text-center">Brand</th>
					<th class="text-center">License ID</th>
                    <th class="text-center">Owner</th>
					<th class="text-center">Purchase Date</th>
				</tr>
			</thead>
			<tbody>
				@foreach($licenses as $license)
				<tr>
					<td class="align-middle text-center">{{ $loop->iteration }}</td>
					<td class="align-middle text-center">{{$license->name}}</td>
					<td class="align-middle text-center">{{$license->brand->name}}</td>
					<td class="align-middle text-center">{{$license->license_number}}</td>
					<td class="align-middle text-center">{{$license->user->name}}</td>
					<td class="align-middle text-center">{{ $license->purchase_date }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
    </div>

</body>
</html>