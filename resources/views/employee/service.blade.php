@extends('adminlte::page')
@section('title', 'Add Car')
@section('content')
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Service Details</h3>
		<div class="box-tools pull-right">
		</div><!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form class="form-horizontal" action="/serviceCar/{{$plate}}" method="POST">
		@csrf		
		<div class="box-body">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Licence Plate</label>

			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="plate"  value="{{$plate}}" disabled>
			</div>
		</div>		
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Current Mileage</label>

			<div class="col-sm-10">
				<input type="number" class="form-control" id="inputPassword3" name="mileage" placeholder="232000"required>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Service Date</label>

			<div class="col-sm-10">
				<input type="date" class="form-control" id="inputPassword3" name="service_date" required>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Next Service Mileage</label>

			<div class="col-sm-10">
				<input type="number" class="form-control" id="inputPassword3" name="next_service" required>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Cost</label>

			<div class="col-sm-10">
				<input type="number" class="form-control" id="inputPassword3" name="cost" required>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Comments</label>

			<div class="col-sm-10">
				<textarea type="text" class="form-control" id="inputPassword3" name="comments" required>
					
				</textarea> 
			</div>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<button type="submit" class="btn btn-info pull-right">Submit</button>
	</div>
	<!-- /.box-footer -->
</form>
</div>
@endsection
