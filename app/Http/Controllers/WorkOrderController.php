<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use App\Role;
use Auth;
use Session;
use Input;
use DB;
use Log;
use Mail;


class WorkOrderController extends Controller
{
    public function index()
    {

        return view('workorder');

    }

    public function view()
    {

        return view('workorderview');

    }

}
