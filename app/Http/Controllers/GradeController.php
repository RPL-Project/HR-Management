<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use Yajra\Datatables\Datatables;

class GradeController extends Controller
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
        $grade = Grade::all();
        return view('mgmt.grade.grade')->withGrade($grade);
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
        return view('mgmt.grade.newgrade');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'grade' => 'required',
            'description' => 'required'
            ]);

        $grade = new Grade;
        $grade->grade_status = $request->grade;
        $grade->grade_description = $request->description;
        $grade->save();

        return redirect()->route('grade.index');
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
        $grade = Grade::find($id);
        return view('mgmt.grade.updategrade')->withGrade($grade);
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
            'grade' => 'required',
            'description' => 'required'
            ]);

        $grade = Grade::find($id);
        $grade->grade_status = $request->grade;
        $grade->grade_description = $request->description;
        $grade->save();

        return redirect()->route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::find($id);
        $grade ->delete();

        return redirect()->back();
    }
}
