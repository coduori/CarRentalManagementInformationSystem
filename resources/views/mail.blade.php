@extends('adminlte::page')
@section('title', 'Send email')
@section('content')
@include('../_messages')
<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Send Email</h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div>
  <form action="/send/mail" method="post">
  @csrf
  <div class="box-body with-border">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">From</label>
    <div class="col-sm-10">
          <label for="staticEmail" class="col-sm-2 col-form-label">{{Auth::user()->email}}</label>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">To</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="to" id="inputPassword" placeholder="john@email.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Subject</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="subject" id="inputPassword" placeholder="Subject">
    </div>
  </div>
  <div class="form-group row">
    <label  for="inputPassword" class="col-sm-2 col-form-label">Message</label>
     <div class="col-sm-10">
    <textarea class="form-control" name="message" rows="3"></textarea>
    </div>
  </div>
</div>
<div class="box-footer with-border">
    <div>
      <button type="submit" class="btn btn-success pull-right">Send</button>
    </div>
  </div>
</form>
@endsection