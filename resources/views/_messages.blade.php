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