@extends('adminlte::page')
@section('title', 'Update Profile')
@section('content')
@include('../_messages')
<div class="col-sm-5">
	<form action="/email/update/{{$id}}" method="post">
		@csrf
	<div class="box box-success">
		<div class="box-header with-border">
			<div class="box-title">Update your email Address</div>
		</div>
		<div class="box-body">		
			<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Email Address</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputPassword3" name="email" placeholder="2500"required>
			</div>
		</div>
		</div>
		<div class="box-footer">
			<button class="btn btn-success pull-right" type="submit">Update</button>
		</div>
	</div>
	</form>
</div>
<div class="col-sm-5">
	<form method="post" action="/phone/update/{{$id}}">
		@csrf
	<div class="box box-success">
		<div class="box-header with-border">
			<div class="box-title">Update your phone number</div>
		</div>
		<div class="box-body">		
			<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Phone number</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPassword3" name="number" placeholder="2500" required pattern="[0]{1}[7]{1}[0-9]{8}" >
			</div>
		</div>
		</div>
		<div class="box-footer">
			<button class="btn btn-success pull-right" type="submit">Update</button>
		</div>
	</div>
</form>
</div>
@endsection