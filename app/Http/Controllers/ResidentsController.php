<?php
namespace App\Http\Controllers;

use App\Resident;
use App\Apartment;

//use Illuminate\Http\Request;

use Request;

use App\Http\Requests;

class ResidentsController extends Controller
{
    public function index()
    {
        $createres = Resident::all();
        return view('CreateRes.index',compact('createres'));
    }
    public function show($id)
    {
        $post = Resident::find($id);
        return view('CreateRes.show', compact('post'));
    }

    public function create()
    {

        return view('CreateRes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $resident = Request::all();
        Resident::create($resident);
        return redirect('resident');
        //return view('CreateApt.index');
    }

    public function edit($id)
    {
        $resident=Resident::find($id);
        //dd($resident);
        return view('CreateRes.edit',compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $residentupdate = Request::all();
        $resident = Resident::find($id);
        $resident->id = $residentupdate['id'];
        $resident->res_pccid = $residentupdate['res_pccid'];
        $resident->res_fname = $residentupdate['res_fname'];
        $resident->res_mname = $residentupdate['res_mname'];
        $resident->res_lname = $residentupdate['res_lname'];
        $resident->res_gender = $residentupdate['res_gender'];
        $resident->res_phone = $residentupdate['res_phone'];
        $resident->res_cellphone = $residentupdate['res_cellphone'];
        $resident->res_email = $residentupdate['res_email'];
        $resident->res_status = $residentupdate['res_status'];
        $resident->res_comment = $residentupdate['res_comment'];
        //$resident->apt_id = $residentupdate['apt_id'];
        $resident->update($residentupdate);
        return redirect('resident');
    }

    public function destroy($id)
    {
        Resident::find($id)->delete();
        return redirect('resident');
    }

}
