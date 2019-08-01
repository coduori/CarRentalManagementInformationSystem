@extends('adminlte::page')
@section('title', 'Vehicle summary')
@section('content')
@include('../_messages')
<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title">Vehicle List</h3>
	</div>
<div class="box-body">
      <table class="table table-striped table-bordered table-hover" id="mydata">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Number Plate</th>               
                        <th>Model</th>                 
                        <th>Status</th>
                        
                        <th>Action</th>
                    </tr>       
                </thead>
                <tbody>
                @php
                $rank = 1; 
                
                   foreach($data as $value ){
                    echo '
	                   <tr>
	                        <td>'.$rank.'</td>                     
	                        <td>'.$value->licence_plate.'</td>                     
	                        <td>'.$value->model.'</td>
	                        ';
	                        if($value->status=='Available'){
	                        echo '
	                        <td><span class="label label-success">'.$value->status.'</span></td> ';
	                    }
	                    elseif($value->status=='Pending'){
	                    echo '
	                    <td><span class="label label-warning">'.$value->status.'</span></td>
	                    ';
	                }elseif($value->status=='Booked'){
	                    echo '
	                    <td><span class="label label-danger">'.$value->status.'</span></td>
	                    ';
	                }elseif($value->status=='Maintenance'){
	                    echo '
	                    <td><span class="label label-info">'.$value->status.'</span></td>
	                    ';
	                }

	                        echo ' 
	                        <td><a href="details/'.$value->licence_plate.'" class="btn btn-success">Details</a></td>';                     
	                            $rank++;
	                echo '</tr> ';
         			}
            	@endphp
                </tbody>
            </table>
        </div>
    </div>
@endsection
