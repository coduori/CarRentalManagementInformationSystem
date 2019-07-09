@extends('adminlte::page')
@section('title', 'Your History')
@section('content')
<div class="col-sm-8">
    <div class="box box-success">
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
          <tbody class="text-center"> 
            <tbody>
              @php $rank = 1; @endphp
              @foreach ($history as $history)
              <tr class="mb-5">
                <td>{{$rank}}</td>
                <td>{{$history->licence_plate}}</td>
                <td>{{$history->lease_start}}</td>
                <td>{{$history->lease_end}}</td>
                <td>{{$history->cost}}</td>
                <td>{{$history->status}}</td>
                <td><a href="{{url('feedback/'.$history->cost.'')}}" class="btn btn-success">Feedback</a></td>   
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