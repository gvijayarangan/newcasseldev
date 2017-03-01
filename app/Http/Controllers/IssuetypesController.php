<?php

namespace App\Http\Controllers;
use App\Issuetype;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IssuetypesController extends Controller
{
    public function index()
    {

        $createissue = Issuetype::all();
        return view('CreateIssue.index',compact('createissue'));
    }

    public function show($id)
    {
        $post=Issuetype::find($id);
        return view('CreateIssue.show',compact('post'));
    }


    public function create()
    {

        return view('CreateIssue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'issue_typename' => 'required|string',
            'issue_description' => 'required|string',
        ]);
        $issuetype = new Issuetype();
        $issuetype->issue_typename = $request -> issue_typename;
        $issuetype->issue_description = $request -> issue_description;
        $issuetype -> save();

        return redirect('issuetype');
    }

    public function edit($id)
    {
        $issue=Issuetype::find($id);
        return view('CreateIssue.edit',compact('issue'));
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
            'issue_typename' => 'required|string',
            'issue_comment' => 'required|string',
        ]);


        $issue = Issuetype::find($id);
        $issue->issue_typename = $request -> issue_typename;
        $issue->issue_description = $request -> issue_description;
        $issue -> save();
        return redirect('issuetype');
    }

    public function destroy($id)
    {
        Issuetype::find($id)->delete();
        return redirect('issuetype');
    }
}