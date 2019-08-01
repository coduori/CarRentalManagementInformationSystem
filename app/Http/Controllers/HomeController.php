<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function showChangePasswordForm(){
        $this->middleware('auth.basic');
        return view('auth.changepassword');
    }
    public function ChangePassword(Request $request){
        
        if (!(Hash::check($request->get('cpassword'), Auth::user()->password))) {
            return redirect()->back();
        }
        else{
            $request->validate([
                'password'         => 'required',
                're-password' => 'required|same:password'
            ]); 
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            try{
                $user->save();
                Session::flash('password_change_success','Your password has been successfully changed');
                return view('auth.login');
            }catch(QueryException $e){
                Session::flash('password_change_fail','Unable to change password');
                return redirect()->back();
            }
         }
    }
    public function showMail(){
        return view ('mail');
    }
    public function sendMail(Request $request){
        Mail::to($request->to)->send(new sendMail($request));
        Session::flash('mail_sent','Mail Sent successfully');
        return redirect()->back();
    }
    public function updatePhone(Request $request, $id){
         try{
        $update=user::where('id',$id)->update(['phone_number'=>$request->number]);
        Session::flash('invalid','You cannot use this phone number!');
        return app('App\Http\Controllers\client\userController')->history();
        }catch(\Illuminate\Database\QueryException $e){
            Session::flash('success','Phone number update successful!');
            return redirect()->back();
        }
    }
    public function updateEmail(Request $request, $id){

        try{
            $update=user::where('id',$id)->update(['email'=>$request->email]);
            Session::flash('success','email update successful!');
            return app('App\Http\Controllers\client\userController')->history();
        }catch(\Illuminate\Database\QueryException $e){
            Session::flash('invalid','You cannot use this email address!');
            return redirect()->back();
        }
    }
}

