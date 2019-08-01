@extends('adminlte::page')
@section('content')
@include('../_messages')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      
<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#requests" data-toggle="tab" aria-expanded="true">Requests</a></li>
              <li class=""><a href="#insurance" data-toggle="tab" aria-expanded="false">Insurance</a></li>
              <li class=""><a href="#service" data-toggle="tab" aria-expanded="false">Service</a></li>              
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="requests">
                 <table class="table table-striped table-bordered table-hover" id="mydata">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Number Plate</th>               
                        <th>Client Name</th>                 
                        <th>Licence No.</th>
                        <th>Lease start</th>
                        <th>Lease end</th>
                        <th>Approved by</th>
                        <th>Status</th>
                        <th>Feedback</th>
                        <th>Penalty</th>
                    </tr>       
                </thead>
                <tbody>
                @php
                $rank = 1; 
                
                   foreach($requests as $value ){
                    echo '
                     <tr>
                          <td>'.$rank.'</td>                     
                          <td>'.$value->licence_plate.'</td>                     
                          <td>'.$value->surname.'</td>           
                          <td>'.$value->licence_number.'</td>                     
                          <td>'.$value->lease_start.'</td>                     
                          <td>'.$value->lease_end.'</td>                     
                          <td>'.$value->cost.'</td>
                          <td>'.$value->approved_by.'</td>
                          <td>'.$value->status.'</td>';                     
                              $rank++;
                  echo '</tr> ';
              }
              @endphp
                </tbody>
            </table>  
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="insurance">
                <table class="table table-striped table-bordered table-hover" id="mydata">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Number Plate</th>               
                        <th>Ins. Type</th>                 
                        <th>Ins. Company</th>
                        <th>Cost</th>
                        <th>renewal Date</th>
                        <th>Expiery</th>
                        <th>Comments</th>
                    </tr>       
                </thead>
                <tbody>
                @php
                $rank = 1; 
                
                   foreach($insurance as $value ){
                    echo '
                     <tr>
                          <td>'.$rank.'</td>                     
                          <td>'.$value->licence_plate.'</td>                     
                          <td>'.$value->type.'</td>           
                          <td>'.$value->company.'</td>                     
                          <td>'.$value->cost.'</td>                     
                          <td>'.$value->renewal_date.'</td>                     
                          <td>'.$value->expiery_date.'</td>
                          <td>'.$value->comments.'</td>';                                       
                              $rank++;
                  echo '</tr> ';
              }
              @endphp
                </tbody>
            </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="service">
               <table class="table table-striped table-bordered table-hover" id="mydata">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Number Plate</th>               
                        <th>Service Date</th>                 
                        <th>Mileage</th>
                        <th>Service due in</th>
                        <th>Cost</th>
                        <th>Comments</th>
                    </tr>       
                </thead>
                <tbody>
                @php
                $rank = 1; 
                
                   foreach($service as $value ){
                  $result = $value->next_service_mileage-$value->current_mileage;
                    echo '
                     <tr>
                          <td>'.$rank.'</td>                     
                          <td>'.$value->licence_plate.'</td>                     
                          <td>'.$value->date.'</td>           
                          <td>'.$value->current_mileage.'</td>                     
                          <td>'.$result.'</td>                     
                          <td>'.$value->cost.'</td>                     
                          <td>'.$value->comments.'</td>';                                       
                              $rank++;
                  echo '</tr> ';
              }
              @endphp
                </tbody>
            </table>
              </div>
              <!-- /.tab-pane -->
     
            <!-- /.box-body -->
         

            </div>
            <!-- /.tab-content -->
          </div>

    </div>
  </div>
</div>
@endsection