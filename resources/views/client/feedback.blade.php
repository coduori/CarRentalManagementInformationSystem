@extends('adminlte::page')
@section('title', 'Feedback')
@section('content')
@include('../_messages')
<div class="col-sm-8">
	<div class="box box-success">
		<div class="box-header with-border">
			<div class="box-title">Feedback for: {{$id->licence_plate}}</div>
			<div class="box-tools pull-right"></div>
		</div>
		<form action="/feedback/{{$id->id}}" method="post">
			@csrf
			<div class="box-body">
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Feedback</label>
					<div class="col-sm-10">
						<textarea type="text" class="form-control" rows=" 4"name="feedback" required>
						</textarea> 
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success pull-right">Submit</button>
			</div>
		</form>
	</div>
	@endsection