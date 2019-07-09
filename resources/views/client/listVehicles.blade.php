@extends('adminlte::page')
@section('title', 'Add Car')
@section('content')
<div class="row">
@foreach($data as $data)
  <div class="col-sm-4">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">{{$data->licence_plate}}: {{$data->transmission}}</h3>
        <span class="label label-danger pull-right">Ksh. {{$data->lease_price}}</i></span>
      </div>
      <div class="box-body">
         <img style="height: auto; max-width: 100%" class="img-square" src="{{ asset('/images/'.$data->image.'')}}">  
      </div>
      <div class="box-footer">
        <a href="{{url('book/'.$data->id.'')}}" class="btn btn-success pull-right">Book</a>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection