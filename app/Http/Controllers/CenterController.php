<?php

namespace App\Http\Controllers;
use App\Center;
use Illuminate\Http\Request;



class CenterController extends Controller
{

    public function index()
    {

        $createcntrs = Center::all();

        return view('CreateCntr.index', compact('createcntrs'));
    }

    public function show($id)
    {
        $post = Center::find($id);
        return view('CreateCntr.show', compact('post'));
    }

    public function create()
    {
       
        return view('CreateCntr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {//dd($request);
        $this->validate($request, [
            'cntr_name' => 'required|string|Max:50',
            'cntr_add1' => 'required|string|Max:50',
            'cntr_city' => 'required|string|Max:50',
            'cntr_state' => 'required|string|Max:20',
            'cntr_zip' => 'required|integer|digits:5',
            'cntr_phone' => 'integer|digits:10',
            'cntr_fax' => 'integer|digits:10',
        ]);
        $center = new Center();
        $center->cntr_name = $request->cntr_name;
        $center->cntr_add1 = $request->cntr_add1;
        $center->cntr_add2 = $request->cntr_add2;
        $center->cntr_city = $request->cntr_city;
        $center->cntr_state = $request->cntr_state;
        $center->cntr_zip = $request->cntr_zip;
        $center->cntr_phone = $request->cntr_phone;
        $center->cntr_fax = $request->cntr_fax;
        $center->cntr_comments= $request->cntr_comments;
        $center->save();

        return redirect('center');
    }

    /**
     * This func
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {

        $createcntrs = Center::find($id);
        return view('CreateCntr.edit',compact('createcntrs'));
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
            'cntr_name' => 'required|string|Max:50',
            'cntr_add1' => 'required|string|Max:50',
            'cntr_city' => 'required|string|Max:50',
            'cntr_state' => 'required|string|Max:20',
            'cntr_zip' => 'required|integer|digits:5',
            'cntr_phone' => 'integer|digits:10',
            'cntr_fax' => 'integer|digits:10',
        ]);

        $UpdateCntr = Center::find($id);
        $UpdateCntr->cntr_name = $request->cntr_name;
        $UpdateCntr->cntr_add1 = $request->cntr_add1;
        $UpdateCntr->cntr_add2 = $request->cntr_add2;
        $UpdateCntr->cntr_city = $request->cntr_city;
        $UpdateCntr->cntr_state = $request->cntr_state;
        $UpdateCntr->cntr_zip = $request->cntr_zip;
        $UpdateCntr->cntr_phone = $request->cntr_phone;
        $UpdateCntr->cntr_fax = $request->cntr_fax;
        $UpdateCntr->cntr_comments= $request->cntr_comments;
        $UpdateCntr->save();
        return redirect('center');
    }

    /**
     *
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Center::find($id)->delete();
        return redirect('center');
    }


}
