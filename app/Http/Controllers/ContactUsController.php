<?php
/**
 * Created by PhpStorm.
 * User: amuthuraj
 * Date: 1/17/17
 * Time: 11:36 PM
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class ContactUsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('ContactUs');
    }

}