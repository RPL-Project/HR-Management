<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use Yajra\Datatables\Datatables;

class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('web')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $division = Division::all();
        return view('mgmt.div.division')->withDivision($division);
    }

    public function dataTable()
    {
        return Datatables::of(Table::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mgmt.div.newdiv');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $division = Division::all();
        $this->validate($request, [
            'division_status' => 'required|regex:/^[\pL\s]+$/u',
            'division_description' => 'required|regex:/^[\pL\s]+$/u'
            ]);

        $division = new Division;
        $division->division_status = $request->division_status;
        $division->division_description = $request->division_description;
        $division->save();

        return redirect()->route('division.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Division::find($id);
        return view('mgmt.div.updatediv',compact('division'))->withDivision($division);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'division_status' => 'required|regex:/^[\pL\s]+$/u|max:5',
            'division_description' => 'required|regex:/^[\pL\s]+$/u|max:200'
            ]);

        $division = Division::find($id);
        $division->division_status = $request->division_status;
        $division->division_description = $request->division_description;
        $division->save();

        return redirect()->route('division.index')->withDivision($division);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::find($id);
        $users = Users::find(id);
        //if($users != null )
            //else
                
        $division ->delete();

        return redirect()->back();
    }
}
