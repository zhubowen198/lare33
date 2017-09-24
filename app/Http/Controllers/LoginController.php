<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Illuminate\Http;
//use Illuminate\Support\Facades\Route as Routes;
use Route;
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
    public function  index(){
        $action = Route::currentRouteAction();
        //return back()->withInput();
        //return redirect()->action('HomeController@index');
        //return redirect()->action('UserController@profile', [1]);
        //return redirect('dashboard')->with('status', 'Profile updated!');通常重定向至新的 URL 时会一并 写入闪存数据至 session


//        @if (session('status'))
//    <div class="alert alert-success">
//        {{ session('status') }}
//    </div>
//        @endif

        return view("welcome",['actions' => $action]);
    }

    public function no(Request $request){

        return $request->input();
    }
}
