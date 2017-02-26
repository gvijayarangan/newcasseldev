<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Resident;
//use App\AppServiceProvider;
//use App\Illuminate\Support\Facades\Validator;



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
        $this -> validate($request, [
            'res_pccid' => 'required|integer',
            'res_fname' => 'required|string',
//            'res_mname' => 'required|string',
            'res_lname' => 'required|string',
            'res_gender' => 'required|string',
//            'res_phone' => 'required|numeric|min:10',
//            'res_cellphone' => 'required|numeric|min:10',
//            'res_email' => 'required|email',
            'res_status' => 'required',
        ]);
        $resident = new Resident();
        $resident->res_pccid = $request -> res_pccid;
        $resident->res_fname = $request -> res_fname;
        $resident->res_mname = $request -> res_mname;
        $resident->res_lname = $request -> res_lname;
        $resident->res_gender = $request -> res_gender;
        $resident->res_phone = $request -> res_phone;
        $resident->res_cellphone = $request -> res_cellphone;
        $resident->res_email = $request -> res_email;
        $resident->res_pccid = $request -> res_pccid;
        $resident->res_status = $request -> res_status;
        $resident->res_comment = $request -> res_comment;
        $resident -> save();
        //$resident = Request::all();
        //Resident::create($resident);
        return redirect('resident');
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
        $this -> validate ($request, [
            'res_pccid' => 'required|integer',
            'res_fname' => 'required|string',
//            'res_mname' => 'string',
            'res_lname' => 'required|string',
//            'res_gender' => 'string',
//            'res_phone' => 'numeric|min:10',
//            'res_cellphone' => 'numeric|min:10',
//            'res_email' => 'email',
            'res_status' => 'required',
        ]);

        // $residentupdate = Request::all();
        $resident = Resident::find($id);
        $resident->res_pccid = $request->res_pccid ;
        $resident->res_fname = $request->res_fname;
//        $resident->res_mname = $request->res_mname;
        $resident->res_lname = $request->res_lname;
//        $resident->res_gender = $request->res_gender;
//        $resident->res_phone = $request->res_phone;
//        $resident->res_cellphone = $request->res_cellphone;
//        $resident->res_email = $request->res_email;
        $resident->res_status = $request->res_status;
//        $resident->res_comment = $request->res_comment;
        $resident->save();
        return redirect('resident');
    }


    public function destroy($id)
    {
        Resident::find($id)->delete();
        return redirect('resident');
    }

}