<!DOCTYPE html>
<html>
<head>
	<title>Vendors - Recap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<img src="https://i.postimg.cc/mZXMFpb7/kop.png" alt="kop_surat">
		<center>
			<h4>Vendors Recap</h4>
		</center>
		<br/>

		<div class="table-responsive">
      <table class='table table-bordered'>
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Name</th>
					<th class="text-center">Email</th>
					<th class="text-center">Phone Number</th>
                    <th class="text-center">Address</th>
				</tr>
			</thead>
			<tbody>
				@foreach($vendors as $vendor)
				<tr>
					<td class="align-middle text-center">{{ $loop->iteration }}</td>
					<td class="align-middle text-center">{{ $vendor->name }}</td>
					<td class="align-middle text-center">{{ $vendor->email }}</td>
					<td class="align-middle text-center">{{ $vendor->phone_number }}</td>
					<td class="align-middle text-center">{{ $vendor->address }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
    </div>

</body>
</html>