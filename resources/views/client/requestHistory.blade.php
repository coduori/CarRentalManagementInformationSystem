@extends('adminlte::page')
@section('title', 'Your History')
@section('content')
@include('../_messages')
<div class="col-sm-5">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Name: {{$user[0]->surname}} {{$user[0]->first_name}}</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>

    <div class="box-body">
      <ul class="nav nav-stacked">
        <li>Email Address:
          <span class="pull-right badg">{{$user[0]->email}}</span>
        </li>
        @if (Auth::user()->role=="Client")
        <li>Licence Number:
          <span class="pull-right badg">{{$user[0]->licence_number}}</span>
        </li>
        <li>Licence Expiery: 
          <span class="pull-right badg">{{date_format(date_create($user[0]->licence_expiery), 'd-m-Y')}}</span>
        </li> 
        @endif
        <li>Join Date:
          <span class="pull-right badg">{{date_format(date_create($user[0]->created_at), 'd-m-Y')}}</span>
        </li>
        <li>Phone Number:
          <span class="pull-right badg">{{$user[0]->phone_number}}</span>
        </li>
        @if(Auth::user()->role=='Client')
        <li>National ID:
          <span class="pull-right badg">{{$user[0]->national_id}}</span>
        </li>
        @endif
      </ul> 
    </div>
    <div class="box-footer">
      <a href="{{url('update/'.$user[0]->id.'')}}" class="btn btn-success text-white pull-right">Update</a>
    </div>
  </div>
</div>
@if( Auth::user()->role=='Client')
<div class="col-sm-10">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Requests</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div><!-- /.box-tools -->
    </div>
    <div class="box-body">
      <table  class="data-table" id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Number Plate</th>               
            <th class="text-center">Lease Start</th>                 
            <th class="text-center">Lease End</th>               
            <th class="text-center">Cost</th>
            <th class="text-center">Status</th> 
            <th class="text-center">ACTION</th>
          </tr>       
        </thead>
        <tbody > 
          <tbody>
            @php $rank = 1; @endphp
            @foreach ($history as $history)
            <tr class="mb-5">
              <td class="text-center">{{$rank}}</td>
              <td class="text-center">{{$history->licence_plate}}</td>
              <td class="text-center">{{date_format(date_create($history->lease_start), 'd-m-Y')}}</td>
              <td class="text-center">{{date_format(date_create($history->lease_end), 'd-m-Y')}}</td>
              <td class="text-center">{{$history->cost}}</td>
              <td class="text-center">{{$history->status}}</td>
              @if($history->status=='Approved')
              <td class="text-center"><a href="{{url('feedback/'.$history->id.'')}}" class="btn btn-success">Return Car</a></td>
              @endif
            </tr>
            @php $rank++; @endphp
            @endforeach
          </tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endif
@endsection