@extends('adminlte::page')
@section('content') 
@include('../_messages')
<div class="col-sm-8">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">User Name: {{ Auth::user()->surname }}</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
      </div>
      <form method="POST" action="changePassword">
        @csrf                    
        <div class="box-body">
            <div class="form-group row">
                <label for="cpassword" class="col-sm-4 col-form-label text-md-right">{{ __('Current Password') }}</label>
                <div class="col-sm-8">
                    <input id="cpassword" type="password" class="form-control{{ $errors->has('cpassword') ? ' is-invalid' : '' }}" name="cpassword" required>
                    @if ($errors->has('cpassword'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cpassword') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label text-md-right">{{ __(' New Password') }}</label>

                <div class="col-sm-8">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="password-confirm" class="col-sm-4 col-form-label text-md-right">
                    {{ __('Confirm New Password') }}
                </label>
                <div class="col-sm-8">
                    <input id="password-confirm" type="password" class="form-control" name="re-password" required>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-success pull-right">
                {{ __('Change Password') }}
            </button>
        </div>
    </form>
</div>
</div>
@endsection