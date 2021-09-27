<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Echo_;

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
    protected $redirectTo = "/manage";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $password = $request['password'];
        $key=$password;

   
    
        $user =  User::find(1);
        if(isset($user)){

            
        if(password_verify($password, $user->password)) {

            $value = password_hash(time().$user->name, PASSWORD_DEFAULT);
            $minutes = 60*1;
            Cookie::queue("_ged", $value, $minutes);

            $user->update(["remember_token"=>$value]);
            return redirect(route('manage'));    
            }
           return back();
            
   

        }



    } 
}
