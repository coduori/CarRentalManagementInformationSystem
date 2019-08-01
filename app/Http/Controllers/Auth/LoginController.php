<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function credentials(Request $request)
    {
        return ['email'=>$request->{$this->username()},
                'password'=>$request->password,
                'is_active'=>true
                ];
    }
    public function registerClient(){

        return view('client.registration');
    }
    public function Authenticated(Request $request, $user){

        if (auth::user()->role=='Admin') {
            return app('App\Http\Controllers\Admin\manageUsersController')->index();
        }elseif (auth::user()->role=='Employee') {
            return app('App\Http\Controllers\staff\functionsController')->index();
        }elseif (auth::user()->role='Client') {
            return app('App\Http\Controllers\Client\requestsController')->index();
        }else{
            return app('App\Http\Controllers\Auth\LoginController')->showLoginForm();
        }
    }
}
