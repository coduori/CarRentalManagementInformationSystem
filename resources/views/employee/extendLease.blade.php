@extends('adminlte::page')
@section('title', 'Extend lease')
@section('content')
@include('../_messages')
<div class="col-sm-7">
  <div class="box box-success">
   <div class="box-header with-border">
    <h3 class="box-title">Extend Lease for :  {{$extend[0]->licence_plate}}</h3>
  </div>
  <form class="form-horizontal" action="/extend/{{$extend[0]->id}}" method="POST">
    @csrf
    <div class="box-body">

     <div class="row"> 
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputID3" class="col-sm-4 control-label">Client Name</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputID3" name ="chasis" placeholder="{{$extend[0]->surname}}" disabled>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Client's Licence</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" name="plate" placeholder="{{$extend[0]->licence_number}}"disabled>
          </div>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputID3" class="col-sm-4 control-label">Lease Start</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputID3" name ="chasis" value="{{$extend[0]->lease_start}}" disabled>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Lease End</label>

          <div class="col-sm-8">
            <input type="date" class="form-control" id="inputEmail3" name="plate" value="{{$extend[0]->lease_end}}"required>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-success pull-right">Update</button>
  </div>
</form>
</div>
</div>
@endsection