<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Rescontact;
use App\Conres;


class RescontactsController extends Controller
{

     public function index()
    {
        $createrescons = Rescontact::all();
        foreach ($createrescons as $rescons) {//dd(Center::findOrFail(7)->cntr_name);
            $rescons->ContactID = Conres::findOrFail($rescons->id)->res_id; //how to concatenate m name and last name with f name?
        }
        return view('CreateRescon.index',compact('createrescons'));
    }

    public function show($id)
    {
        $post = Rescontact::find($id);
        return view('CreateRescon.show', compact('post'));
    }

    public function create()
    {
        $conress = Conres::lists('id', 'res_id');
        return view('CreateRescon.create', compact('conress'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {//dd($request);
        $this->validate($request, [
            'con_fname' => 'required|string',
          //  'con_mname' => 'required|string',
            'con_lname' => 'required|string',
            'con_relationship' => 'required|string',
            'con_cellphone' => 'required|integer',
            'con_email' => 'required|string',
          //  'con_comment' => 'required|string',
            'con_gender' => 'required|string',
        ]);
        $rescontact = new Rescontact();
        $rescontact->con_fname = $request->con_fname;
        $rescontact->con_mname = $request->con_mname;
        $rescontact->con_lname = $request->con_lname;
        $rescontact->con_relationship = $request->con_relationship;
        $rescontact->con_cellphone = $request->con_cellphone;
        $rescontact->con_email = $request->con_email;
        $rescontact->con_comment = $request->con_comment;
        $rescontact->con_gender = $request->con_gender;
        $rescontact->id = $request->id;
        $rescontact->save();

        return redirect('rescontact');
    }

    /**
     * This func
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $conress = Conres::lists('id', 'res_id');
        $createrescontacts = Rescontact::find($id);
        return view('CreateRescontact.edit',compact('conress', 'createrescontacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'con_fname' => 'required|string',
            //  'con_mname' => 'required|string',
            'con_lname' => 'required|string',
            'con_relationship' => 'required|string',
            'con_cellphone' => 'required|integer',
            'con_email' => 'required|string',
            //'con_comment' => 'required|string',
            'con_gender' => 'required|string',
        ]);
        $CreateRescon = Rescontact::find($id);
        $CreateRescon->con_fname = $request->con_fname;
        $CreateRescon->con_mname = $request->con_mname;
        $CreateRescon->con_lname = $request->con_lname;
        $CreateRescon->con_relationship = $request->con_relationship;
        $CreateRescon->con_cellphone = $request->con_cellphone;
        $CreateRescon->con_email = $request->con_email;
        $CreateRescon->con_comment = $request->con_comment;
        $CreateRescon->con_gender = $request->con_gender;
        $CreateRescon->id = $request->id;
        $CreateRescon->save();

        return redirect('rescontact');
    }

    /**
     *
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Rescontact::find($id)->delete();
        return redirect('rescontact');
    }
}