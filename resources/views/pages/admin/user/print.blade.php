<!DOCTYPE html>
<html>
<head>
	<title>Vendors - Recap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<img src="https://i.postimg.cc/mZXMFpb7/kop.png" alt="kop_surat">
		<center>
			<h4>Users Recap</h4>
		</center>
		<br/>

		<div class="table-responsive">
      <table class='table table-bordered'>
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Name</th>
					<th class="text-center">Job Title</th>
					<th class="text-center">Department Name</th>
					<th class="text-center">Role</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td class="align-middle text-center">{{ $loop->iteration }}</td>
					<td class="align-middle text-center">{{ $user->name }}</td>
					<td class="align-middle text-center">{{ $user->job_title }}</td>
					<td class="align-middle text-center">{{ $user->department->name }}</td>
					<td class="align-middle text-center">
                        @if($user->role == "1")
                            <span class="badge badge-secondary">ADMIN</span>
                        @elseif ($user->role == "2")
                            <span class="badge badge-dark">USER</span>
                        @elseif ($user->role == "3")
                            <span class="badge badge-danger">MANAJER IT</span>
                        @endif
                    </td>
				</tr>
				@endforeach
			</tbody>
		</table>
    </div>

</body>
</html>