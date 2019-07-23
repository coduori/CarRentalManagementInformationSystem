@extends('adminlte::page')
@section('title', 'Update mileage')
@section('content')
@include('../_messages')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="box box-success collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Update Service History for {{$plate}}</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <form method="POST" action="{{url('new/'.$id.'/'.$plate.'')}}">
          @csrf
        <div class="box-body">
        
          <div class="form-group">
            <label for="inputID3" class="col-sm-4 control-label">New mileage</label>

            <div class="col-sm-8">
              <input type="number" class="form-control" id="inputID3" name ="mileage" required>
            </div>
          </div>
        
        </div>
      <div class="box-footer">
          <button type="submit" class="btn btn-success text-white pull-right">Update</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>
@endsection