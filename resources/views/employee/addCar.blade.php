@extends('adminlte::page')

@section('title', 'Add Car')
@section('content')
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Add Car</h3>
		<div class="box-tools pull-right">
		</div><!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form class="form-horizontal" action="/addCar" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="row"> 
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputID3" class="col-sm-4 control-label">Chasis Number</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputID3" name ="chasis" placeholder="DE4RFG6YH" required>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label">Licence Plate</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputEmail3" name="plate" placeholder="KCB 111A"required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Model</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputPassword3" name="model" placeholder="Toyota Auris" required>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Transmission</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputPassword3" name="transmission" placeholder="Manual">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Lease Price</label>

						<div class="col-sm-8">
							<input type="number" class="form-control" id="inputPassword3" name="price" placeholder="2500"required>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Special features</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputPassword3" name="features" placeholder="cut out location, music system etc." required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Image</label>

						<div class="col-sm-8">
							<input type="file" name ="file" class="form-control-file" id="exampleFormControlFile1" required>
						</div>
					</div>
				</div>			
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4 control-label">Insurance Company</label>
						<div class="col-sm-8">
							<select class="form-control" name="company" required>
								<option value="madison insurance">MADISON INSURANCE</option>
								<option value="jubilee insurance">JUBILEE INSURANCE</option>
								<option value="cic insurance">CIC INSURANCE</option>
								<option value="next insurance">NEXT INSURANCE</option>
								<option value="alianz insurance ">ALLIANZ INSURANCE</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-sm-4 control-label">Insurance Type</label>
						<div class="col-sm-8">
							<select class="form-control" name="type" required>
								<option value="comprehensive">COMPREHENSIVE</option>
								<option value="third party">THIRD PARTY</option>
								<option value="theft and fire">THEFT AND FIRE</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Insurance Cost</label>

						<div class="col-sm-8">
							<input type="number" class="form-control" id="inputPassword3" name="cost" placeholder="2500"required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Purchase Date</label>

						<div class="col-sm-8">
							<input type="date" class="form-control" id="inputPassword3" name="renewal" required>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Expiery Date</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" id="inputPassword3" name="expiery" required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Current Mileage</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" id="inputPassword3" name="mileage" placeholder="232000"required>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Service Date</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" id="inputPassword3" name="service_date" required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Next Service Mileage</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" id="inputPassword3" name="next_service" required>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Cost</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" id="inputPassword3" name="cost" required>
						</div>
					</div>
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
	<div class="box-footer">
		<button type="submit" class="btn btn-info pull-right">Submit</button>
	</div>
</form>
</div>
@endsection
