@extends('adminlte::page')
@section('title', 'Add Car')
@section('content')
@include('../_messages')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="box box-success collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Vehicle Details</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body ">
          <div class="col-md-7">
            <div class="box box-widget widget-user-2">
              <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                  <img class="img-circle" src="{{ asset('/images/'.$vehicle->image.'')}}" alt="User Avatar">
                </div>  
                <h3 class="widget-user-username">{{$vehicle->licence_plate}}</h3>
                <h5 class="widget-user-desc">{{$vehicle->model}}</h5>
                <h5 class="widget-user-desc">{{$vehicle->status}}</h5>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li>Chasis Number 
                  <span class="pull-right badg">{{$vehicle->chasis_number}}</span>
                </li>
                <li>Transmission 
                  <span class="pull-right badg">{{$vehicle->transmission}}</span>
                </li>
                <li>Lease Price
                  <span class="pull-right badg">{{$vehicle->lease_price}}</span>
                </li>
                <li>Special features 
                  <span class="pull-right badg">{{$vehicle->special_features}}</span>
                </li>
                <li>Insurance Type 
                  <span class="pull-right badg">{{$vehicle->type}}</span>
                </li>
                <li>Insurance Company 
                  <span class="pull-right badg">{{$vehicle->company}}</span>
                </li>
                <li>Insurance Renewal Date 
                  <span class="pull-right badg">{{$vehicle->renewal_date}}</span>
                </li>
                <li>Insurance Expiery Date 
                  <span class="pull-right badg">{{$vehicle->expiery_date}}</span>
                </li>
                <li>Current Mileage 
                  <span class="pull-right badg">{{$vehicle->current_mileage}}</span>
                </li>
                <li>Next Service Mileage 
                  <span class="pull-right badg ">{{$vehicle->next_service_mileage}}</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-5">
                <div class="widget-user-image">
                  <img class="img-square img-thumbnail" src="{{ asset('/images/'.$vehicle->image.'')}}" alt="User Avatar">
                </div>  
            
          </div>
        </div>

    </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="box box-success collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Insurance History for : {{$vehicle->licence_plate}} </h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
         <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Insurance Type</th>
              <th scope="col">Insurance Company</th>
              <th scope="col">Cost</th>
              <th scope="col">Renewal date</th>
              <th scope="col">Expiery date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php $rank = 1; @endphp
            @foreach ($insurance as $det)
            <tr>
              <td>{{$rank}}</td>
              <td>{{$det->type}}</td>
              <td>{{$det->company}}</td>
              <td>{{$det->cost}}</td>
              <td>{{$det->renewal_date}}</td>
              <td>{{$det->expiery_date}}</td>
              @if (count($insurance)!=1)
                {{-- expr --}}
             
              <td><a href="{{url('delete/'.$det->licence_plate.'/insurance/'.$det->id)}}" class= "btn btn-danger">Delete</a></td>
               @endif
            </tr>
            @php $rank++; @endphp
            @endforeach  
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
          <a href="{{url('update/'.$vehicle->licence_plate.'/insurance')}}" class="btn btn-success text-white pull-right">Update</a>
      </div>
    </div>

  </div>
</div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="box box-success collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Service History for : {{$vehicle->licence_plate}} </h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
         <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Service Date</th>
              <th scope="col">Current Mileage</th>
              <th scope="col">Due Mileage</th>
              <th scope="col">Service Cost</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php $rank = 1; @endphp
            @foreach ($service as $det)
            <tr>
              <td>{{$rank}}</td>
              <td>{{$det->date}}</td>
              <td>{{$det->current_mileage}}</td>
              <td>{{$det->next_service_mileage}}</td>
              <td>{{$det->cost}}</td>
              @if (count($service)!=1)
              <td><a href="{{url('delete/'.$det->licence_plate.'/service/'.$det->id)}}" class= "btn btn-danger">Delete</a></td>
                @endif
            </tr>
            @php $rank++; @endphp
            @endforeach  
          </tbody>
        </table>
      </div>
      <div class="box-footer">
          <a href="{{url('update/'.$vehicle->licence_plate.'/service')}}" class="btn btn-success text-white pull-right">Update</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection