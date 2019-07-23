@if(Session::has('add_user_success'))
<div class="alert alert-info"> 
	{{Session::get('add_user_success')}}
</div>
@endif
@if(Session::has('activate_user_success'))
<div class="alert alert-success"> 
	{{Session::get('activate_user_success')}}
</div>
@endif
@if(Session::has('suspend_user_success'))
<div class="alert alert-warning"> 
	{{Session::get('suspend_user_success')}}
</div>
@endif
@if(Session::has('user_deleted'))
<div class="alert alert-warning"> 
	{{Session::get('user_deleted')}}
</div>
@endif
@if(Session::has('collected'))
<div class="alert alert-success"> 
	{{Session::get('collected')}}
</div>
@endif
@if(Session::has('extended'))
<div class="alert alert-success"> 
	{{Session::get('extended')}}
</div>
@endif
@if(Session::has('canceled'))
<div class="alert alert-success"> 
	{{Session::get('canceled')}}
</div>
@endif
@if(Session::has('approved'))
<div class="alert alert-success"> 
	{{Session::get('approved')}}
</div>
@endif
@if(Session::has('add_vehicle_success'))
<div class="alert alert-success"> 
	{{Session::get('add_vehicle_success')}}
</div>
@endif
@if(Session::has('book_succesful'))
<div class="alert alert-success"> 
	{{Session::get('book_succesful')}}
</div>
@endif
@if(Session::has('registration_success'))
<div class="alert alert-success"> 
	{{Session::get('registration_success')}}
</div>
@endif
@if(Session::has('password_change_success'))
<div class="alert alert-success"> 
	{{Session::get('password_change_success')}}
</div>
@endif
@if(Session::has('add_vehicle_failed'))
<div class="alert alert-danger"> 
	{{Session::get('add_vehicle_failed')}}
</div>
@endif
@if(Session::has('add_user_failed'))
<div class="alert alert-danger"> 
	{{Session::get('add_user_failed')}}
</div>
@endif
@if(Session::has('cannot_book'))
<div class="alert alert-danger"> 
	{{Session::get('cannot_book')}}
</div>
@endif
@if(Session::has('expired'))
<div class="alert alert-danger"> 
	{{Session::get('expired')}}
</div>
@endif
@if(Session::has('registration_failed'))
<div class="alert alert-danger"> 
	{{Session::get('registration_failed')}}
</div>
@endif
@if(Session::has('password_change_fail'))
<div class="alert alert-danger"> 
	{{Session::get('password_change_fail')}}
</div>
@endif
@if(Session::has('service'))
<div class="alert alert-success col-md-8"> 
	{{Session::get('service')}}
</div>
@endif
@if(Session::has('mail_sent'))
<div class="alert alert-success"> 
	{{Session::get('mail_sent')}}
</div>
@endif
@if(Session::has('insurance'))
<div class="alert alert-success col-md-8"> 
	{{Session::get('insurance')}}
</div>
@endif
@if(Session::has('invalid'))
<div class="alert alert-danger col-md-8"> 
	{{Session::get('invalid')}}
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success col-md-8"> 
	{{Session::get('success')}}
</div>
@endif





