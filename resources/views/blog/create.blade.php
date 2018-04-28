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
				<form action="{{ route('blog.store') }}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Name" value="{{old('title')}}">
					</div>
					<div class="form-group">
						<label for="body">Body</label>
						<textarea name="body" id="body" class="form-control" cols="30" rows="10"> {{old('body')}} </textarea>
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
