@extends('adminlte::page')
@section('title', 'Add Car')
@section('content')
  <div class="col-sm-4">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">{{$request[0]->licence_plate}} : {{$request[0]->transmission}}</h3>
        <span class="label label-danger pull-right">Ksh. {{$request[0]->lease_price}}</span>
      </div>
      <div class="box-body">
                <img style="height: auto; max-width: 100%" class="img-square" src="{{ asset('/images/'.$request[0]->image.'')}}">  
      </div>
      <div class="box-body">
              <ul class="nav nav-stacked">
                
                <li>Model
                  <span class="pull-right badg">{{$request[0]->model}}</span>
                </li>
                <li>Lease Date
                  <span class="pull-right badg">{{Carbon\Carbon::now()}}</span>
                </li>
                <li>Return Date
                  <span class="pull-right badg">{{Carbon\Carbon::now()->addDays(1)}}</span>
                </li>
              </ul> 
      </div>
    <div class="box-footer">
          <a href="{{url('confirm/'.$request[0]->id.'')}}" class="btn btn-success text-white pull-right">Confirm</a>
           <a href="{{ URL::previous() }}" class="btn btn-danger text-white pull-left">Cancel</a>
      </div>
    </div>
    </div>
@endsection