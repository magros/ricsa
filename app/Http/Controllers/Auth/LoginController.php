<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected function redirectTo()
     {

         if(auth()->check()){
             switch(auth()->user()->role_id){
                case 0:
                break;

                case 1:
                     return '/admin';
                break;

                case 2:
                     return '/mywedding';
                break;

                case 3:
                    return '/admin';
                break;
                case 4:
                    return '/cotizacion';
                break;

                 default:
                     return '/';
                 break;
             }

         }

     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function activate($confirmation_code){
        $user = User::where('confirmation_code',$confirmation_code)->firstOrFail();
        if(!$user->status) $user->status = 1;
        $user->confirmation_code = null;
        $user->save();
        return redirect('/')->with('alert',Helpers::alertData('success',__('common.account_activated')));;
    }
}
