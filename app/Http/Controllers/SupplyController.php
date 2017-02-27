<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Supply;
use App\Supplyorder;

class SupplyController extends Controller
{

    public function index()
    {
        $createsupply = Supply::all();

        return view('CreateSupply.index',compact('createsupply'));
    }

    public function show($id)
    {
        $supply_post = Supply::find($id);
        
        return view('CreateSupply.show', compact('supply_post'));
    }

    public function create()
    {

        return view('CreateSupply.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'sup_name' => 'required',
            'sup_unitprice' => 'required|integer',
            'sup_comment' => 'required',
        ]);
        
        $supplydata = new Supply();
        $supplydata->sup_name = $request->sup_name;
        $supplydata->sup_unitprice = $request->sup_unitprice;
        $supplydata->sup_comment = $request->sup_comment;

        $supplydata->save();
       
        return redirect('Supply');
    }

    /**
     * This func
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        //$supplyedits = Center::lists('cntr_name', 'id');
        //$createapts = Apartment::find($id);
        $createsupply = Supply::find($id);
        //dd($createsupply);
        return view('CreateSupply.edit',compact('createsupply'));
        //return view('CreateSupply.edit');
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
            'sup_name' => 'required',
            'sup_unitprice' => 'required',
            
        ]);

        $CreateSupply = Supply::find($id);
        $CreateSupply->sup_name = $request->sup_name;
        $CreateSupply->sup_unitprice = $request->sup_unitprice;
        $CreateSupply->sup_comment = $request->sup_comment;
        $CreateSupply->save();
        return redirect('Supply');
    }

    /**
     *
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Supply::find($id)->delete();
        return redirect('Supply');
    }
}