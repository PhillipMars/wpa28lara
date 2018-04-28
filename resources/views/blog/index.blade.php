<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<a href="{{ route('blog.create') }}" class="btn btn-success" >Create Blog</a>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Blog Title</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
