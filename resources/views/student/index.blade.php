<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

</body>
</html><div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<a href="{{ route('student.create') }}" class="btn btn-success" >Create Student Info</a>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Address</th>
							<th>Education</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Idiot Jack</td>
							<td>jackidiot@gmail.com</td>
							<td>Homeless</td>
							<td>Primary School</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>