@extends('adminlte::page')
@section('title', 'Your History')
@section('content')
@include('../_messages')
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
        <table  class="data-table table" id="example" class="display" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Number Plate</th>               
              <th class="text-center">Licence Number</th>               
              <th class="text-center">Surname</th>               
              <th class="text-center">Lease Start</th>                 
              <th class="text-center">Lease End</th>               
              <th class="text-center">Cost</th>
              <th class="text-center" colspan="2">ACTION</th>
            </tr>       
          </thead>
          <tbody class="text-center"> 
            <tbody>
              
              @php $rank = 1; @endphp
              @foreach ($requests as $requests)
              <tr class="mb-5">
                <td class="text-center">{{$rank}}</td>
                <td class="text-center">{{$requests->licence_plate}}</td>
                <td class="text-center">{{$requests->licence_number}}</td>
                <td class="text-center">{{$requests->surname}}</td>
                <td class="text-center">{{$requests->lease_start}}</td>
                <td class="text-center">{{$requests->lease_end}}</td>
                <td class="text-center">{{$requests->cost}}</td>
                <td class="text-center">
                  <a href="{{url('approve/'.$requests->id.'')}}" class="btn btn-success">Approve</a>
                  <a href="{{url('cancel/'.$requests->id.'')}}" class="btn btn-danger">Cancel</a>
                </td>   
              </tr>
              @php $rank++; @endphp
              @endforeach
            </tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-10">
    <div class="box box-success">
       <div class="box-header with-border">
        <h3 class="box-title">Leased Out</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div><!-- /.box-tools -->
      </div>
      <div class="box-body">
        <table  class="data-table table" id="example" class="display" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Number Plate</th>               
              <th class="text-center">Licence Number</th>               
              <th class="text-center">Surname</th>               
              <th class="text-center">Lease Start</th>                 
              <th class="text-center">Lease End</th>               
              <th class="text-center">Cost</th>
              <th class="text-center">Penalty</th>
              <th class="text-center" colspan="2">ACTION</th>
            </tr>       
          </thead>
          <tbody class="text-center"> 
            <tbody>
              @php $rank = 1; @endphp
              @foreach ($approved as $requests)
              <tr class="mb-5">
                <td class="text-center">{{$rank}}</td>
                <td class="text-center">{{$requests->licence_plate}}</td>
                <td class="text-center">{{$requests->licence_number}}</td>
                <td class="text-center">{{$requests->surname}}</td>
                <td class="text-center">{{$requests->lease_start}}</td>
                <td class="text-center">{{$requests->lease_end}}</td>
                <td class="text-center">{{$requests->cost}}</td>
                <td class="text-center">{{$requests->penalty}}</td>
                <td class="text-center">
                  <a href="{{url('extend/'.$requests->id.'')}}" class="btn btn-success">Extend Lease</a>
                  <a href="{{url('collect/'.$requests->id.'')}}" class="btn btn-danger">Collect</a>
                </td>   
              </tr>
              @php $rank++; @endphp
              @endforeach
            </tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@section('js')
<script>
  $(document).ready(function () {
    $('.data-table').dataTable();
  });
</script>
@stop
@endsection