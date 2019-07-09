@extends('adminlte::page')
@section('title', 'Your History')
@section('content')
<div class="col-sm-10">
    <div class="box box-success">
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
@section('js')
<script>
  $(document).ready(function () {
    $('.data-table').dataTable();
  });
</script>
@stop
@endsection