@extends('adminlte::page')
@section('title', 'Manage Users')
@section('content')

     @include('../_messages')
     <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Create User</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div><!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="/createUser" method="POST">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="inputID3" class="col-sm-2 control-label">Employee ID</label>

            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputID3" maxlength="6" name ="employee_id" placeholder="100023">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="example@email.com">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">First Name</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" name="first_name" placeholder="John">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Surname</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" name="surname" placeholder="Doe">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Phone Number</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" maxlength="10" name="phone_number" placeholder="0708312406">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Create User</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>

    <div class="box box-success collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Active Users</h3>
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
            <th scope="col">Employee ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col" colspan="2" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @php $rank = 1; @endphp
              @foreach ($users as $user)
              <tr>
                <td>{{$rank}}</td>
                <td>{{$user->employee_id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td><a href="{{url('change/'.$user->email.'')}}" class="btn btn-success">Change Role</a></td>
                <td><a href="{{url('suspend/'.$user->email.'')}}" class= "btn btn-warning">Suspend</td>
                </tr>
                @php $rank++; @endphp
                @endforeach  
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->

   <div class="box box-warning collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Suspended Users</h3>
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
            <th scope="col">Employee ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col" colspan="2" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @php $rank = 1; @endphp
              @foreach ($suspended as $suspended)
              <tr>
                <td>{{$rank}}</td>
                <td>{{$suspended->employee_id}}</td>
                <td>{{$suspended->first_name}}</td>
                <td>{{$suspended->surname}}</td>
                <td>{{$suspended->email}}</td>
                <td>{{$suspended->role}}</td>
                <td><a href="{{url('activate/'.$suspended->email.'')}}" class="btn btn-success">Activate</a></td>
                <td><a href="{{url('delete/'.$suspended->email.'')}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @php $rank++; @endphp
                @endforeach  
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->


@endsection