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
					@if ($errors->any())
				    <div class="alert alert-danger" style="margin-top: 4px">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
					@endif
				<form action="{{ route('student.store') }}" method="post"  style="margin-bottom: 6px">
					{{csrf_field()}}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{old('name')}}">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
					</div>
					<div class="form-group">
						<label for="Address">Address</label>
						<input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{old('address')}}">
					</div>
					<div class="form-group">
						<label for="education">Education</label>
						<textarea name="education" id="education" class="form-control" cols="30" rows="10">{{old('education')}}</textarea>
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
