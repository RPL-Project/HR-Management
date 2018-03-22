<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\User;
use Auth;
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
        $user = User::find(Auth::user()->id)
            ->join('grades', 'users.grade_id', '=', 'grades.id')
            ->where('users.id','=',Auth::user()->id)
            ->get();
        return view('mgmt.grade.grade')->withGrade($grade)->withUser($user);
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
        $grade = Grade::all();
        $this->validate($request, [
            'grade_status' => 'required|regex:/^[\pL\s]+$/u',
            'grade_description' => 'required|regex:/^[\pL\s]+$/',
            'status' => 'required'
            ]);

        $grade = new Grade;
        $grade->grade_status = $request->grade_status;
        $grade->grade_description = $request->grade_description;
        $grade->status = $request->status;
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
        return view('mgmt.grade.updategrade',compact('grade'))->withGrade($grade);
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
            'grade_status' => 'required|regex:/^[\pL\s]+$/u',
            'grade_description' => 'required|regex:/^[\pL\s]+$/u|max:200',
            'status' => 'required'
            ]);

        $grade = Grade::find($id);
        $grade->grade_status = $request->grade_status;
        $grade->grade_description = $request->grade_description;
        $grade->status = $request->status;
        $grade->save();

        return redirect()->route('grade.index')->withGrade($grade);
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
