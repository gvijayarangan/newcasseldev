<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\CanResetPassword;

use Hash;
use Auth;
use Illuminate\Support\Facades\Input;


class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showUserPasswordChange($user_id_from_email)
    {
        error_log('showUserPasswordChange - Value of User ID from email password url - ' .$user_id_from_email);
        //$_SESSION[$user_id_from_email];
        $this->viewData['user_id_from_email'] = $user_id_from_email;
        return view('auth.passwords.createpassword',  $this->viewData);
    }

    /**
     * Updates the password for the current user.
     *
     * @param  void
     * @return void
     */
    public function createNewPassword()
    {
        //Display the received id from url email

        //Get the user object from database
        $rules = array(
            'password' => 'required|confirmed|min:6',
        );

        $user_id = $_POST["user_id_from_email"];
        error_log('createNewPassword - Value of User ID receieved from email password url - ' .$user_id);

        $validator = Validator::make(Input::all(), $rules);

        $user = Auth::user();

        $user_id = DB::table('users')->where('email', $_POST['email'])->value('id');


        if ($validator->fails()) {
            return view('auth.passwords.createpassword')->withErrors($validator);
        } else {
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            return view('auth.passwords.createpassword')->with('Password has been changed');
        }
    }
}
