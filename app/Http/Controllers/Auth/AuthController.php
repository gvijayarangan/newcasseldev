<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $redirectPath = '/home';
    protected $loginPath = '/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => ['logout', 'updatePassword']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'f_name' => 'required|max:255',
            'l_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'cell' => 'required|min:10|max:10',
            'role' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'f_name' => $data['name'],
            'l_name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'cell' => $data['cell'],
        ]);
    }

    // Todo: should probably implemeent a trait ChangePassword
    /**
     * Updates the password for the current user.
     *
     * @param  void
     * @return void
     */
    public function updatePassword()
    {
        if (Auth::check())
        {
            $user = Auth::user();
            $rules = array(
                'old_password' => 'required',
                'password' => 'required|confirmed|min:6',
             );

            $validator = Validator::make(Input::all(), $rules);
            //dd($validator);
            if ($validator->fails()) {
                return view('auth.passwords.change')->withErrors($validator);
             } else {
                if (!Hash::check(Input::get('old_password'), $user->password)) {
                    return view('auth.passwords.change')->withErrors('Your old password does not match');
                } else {
                    $user->password = bcrypt(Input::get('password'));
                    $user->save();
                    return view('auth.passwords.change')->withErrors('Password has been changed');
                }
            }
        }
    }

    // This function overridden the one in traits AuthenticatesUsers.php
    protected function getCredentials($request)
    {
        $request['active'] = true;
        $request['deleted_at'] = null;
        return $request->only($this->loginUsername(), 'password', 'active', 'deleted_at');
    }

    public function showPasswordEmailPage()
    {
        return view('auth.passwords.email');
    }
}
