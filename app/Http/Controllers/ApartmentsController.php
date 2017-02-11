<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\User;
//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;

class ApartmentsController extends Controller
{
    public function index()
    {
        
        $createapts = Apartment::all();
        return view('CreateApt.index',compact('createapts'));
    }
    public function show($id)
    {
        $post = Apartment::find($id);
        return view('CreateApt.show', compact('post'));
    }

    public function create()
    {

        return view('CreateApt.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $createapts = Request::all();
        Apartment::create($createapts);
        return redirect('apartment');
        //return view('CreateApt.index');
    }

    public function edit($id)
    {
        $createapts=Apartment::find($id);
        //dd($createapts);
        return view('CreateApt.edit',compact('createapts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $CreateAptUpdate = Request::all();
        $CreateApt = Apartment::find($id);
        $CreateApt->id = $CreateAptUpdate['id'];
        $CreateApt->apt_floornumber = $CreateAptUpdate['apt_floornumber'];
        $CreateApt->apt_number = $CreateAptUpdate['apt_number'];
        $CreateApt->apt_comments = $CreateAptUpdate['apt_comments'];
        #$CreateApt->cntr_id = $CreateAptUpdate['cntr_id']; #commented to avoid FK from Center table
        $CreateApt->update($CreateAptUpdate);
        return redirect('apartment');
    }

    public function destroy($id)
    {
        Apartment::find($id)->delete();
        return redirect('apartment');
    }
}