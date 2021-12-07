<!DOCTYPE html>
<html>
<head>
	<title>Assets - Recap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<img src="https://i.postimg.cc/mZXMFpb7/kop.png" alt="kop_surat">
		<center>
			<h4>Assets Recap</h4>
		</center>
		<br/>
		<p><b>Periode</b> : {{ \Carbon\Carbon::parse($start_date)->isoFormat('D MMMM Y') }} - {{ \Carbon\Carbon::parse($end_date)->isoFormat('D MMMM Y') }}</p>

		<div class="table-responsive">
      <table class='table table-bordered'>
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Asset Tag</th>
					<th class="text-center">Name</th>
					<th class="text-center">Type</th>
                    <th class="text-center">Brand</th>
					<th class="text-center">Owner</th>
				</tr>
			</thead>
			<tbody>
				@foreach($assets as $asset)
				<tr>
					<td class="align-middle text-center">{{ $loop->iteration }}</td>
					<td class="align-middle text-center">{{ $asset->asset_tag }}</td>
					<td class="align-middle text-center">{{ $asset->name }}</td>
					<td class="align-middle text-center">{{ $asset->typeAsset->name }}</td>
					<td class="align-middle text-center">{{ $asset->brand->name }}</td>
					<td class="align-middle text-center">{{ $asset->user->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
    </div>

</body>
</html>