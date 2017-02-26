<?php
namespace App\Http\Controllers;
use App\Center;
use Illuminate\Http\Request;
//use App\AppServiceProvider;
//use App\Illuminate\Support\Facades\Validator;

// just a comment

class CenterController extends Controller
{
    public function index()
    {
        $createcntr = Center::all();
        return view('CreateCntr.index',compact('createcntr'));
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
    {
        $this -> validate($request, [
            'cntr_name' => 'required|string',
            'cntr_add1' => 'required|string',
            'cntr_city' => 'required|string',
            'cntr_state' => 'required|string',
            'cntr_zip' => 'required|string',
        ]);
        $center = new Center();
        $center->cntr_name = $request -> cntr_name;
        $center->cntr_add1 = $request -> cntr_add1;
        $center->cntr_add2 = $request -> cntr_add2;
        $center->cntr_city = $request -> cntr_city;
        $center->cntr_state = $request -> cntr_state;
        $center->cntr_zip = $request -> cntr_zip;
        $center->cntr_phone = $request -> cntr_phone;
        $center->cntr_fax = $request -> cntr_fax;
        $center->cntr_comments = $request -> cntr_comments;
        $center -> save();


        return redirect('center');
    }


    public function edit($id)
    {
        $center=Center::find($id);

        return view('CreateCntr.edit',compact('center'));
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
            'cntr_name' => 'required|string',
            'cntr_add1' => 'required|string',
            'cntr_city' => 'required|string',
            'cntr_state' => 'required|string',
            'cntr_zip' => 'required|string',
        ]);


        $center = Center::find($id);
        $center->cntr_name = $request -> cntr_name;
        $center->cntr_add1 = $request -> cntr_add1;
        $center->cntr_add2 = $request -> cntr_add2;
        $center->cntr_city = $request -> cntr_city;
        $center->cntr_state = $request -> cntr_state;
        $center->cntr_zip = $request -> cntr_zip;
        $center->cntr_phone = $request -> cntr_phone;
        $center->cntr_fax = $request -> cntr_fax;
        $center->cntr_comments = $request -> cntr_comments;
        $center->save();
        return redirect('center');
    }


    public function destroy($id)
    {
        Center::find($id)->delete();
        return redirect('center');
    }

}