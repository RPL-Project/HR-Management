<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Division;
use App\Grade;
use Auth;
use Yajra\Datatables\Datatables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::select('users.id','employee_id','name','email','gender','division_status','grade_status')
            ->join('divisions', 'users.division_id', '=', 'divisions.id')
            ->join('grades', 'users.grade_id', '=', 'grades.id')
            ->get();

        $users = User::find(Auth::user()->id)
            ->join('divisions', 'users.division_id', '=', 'divisions.id')
            ->join('grades', 'users.grade_id', '=', 'grades.id')
            ->where('users.id','=',Auth::user()->id)
            ->get();

        return view('mgmt.emp.employee',compact('users'))->withUser($user);
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
        $divisions = Division::select('*')
        ->where('status', '=', 'accept')
        ->get();
        $grades = Grade::select('*')
        ->where('status', '=', 'accept')
        ->get();

        return view('mgmt.emp.newemp',compact('divisions','grades'));
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
            'employee_id' => 'required|string|max:8|min:8|regex:/^[0-9]+$/|unique:users',
            'name' => 'required|string|regex:/^[\pL\s]+$/u',
            'gender' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'division_id' => 'required',
            'grade_id' => 'required'
            ]);

        $user = new User;
        $user->employee_id = $request->employee_id;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->division_id = $request->division_id;
        $user->grade_id = $request->grade_id;

        $user->save();

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $divisions = Division::select('*')
        ->where('status', '=', 'accept')
        ->get();
        $grades = Grade::select('*')
        ->where('status', '=', 'accept')
        ->get();

        return view('mgmt.emp.updateemp', compact('divisions','grades'))->withUser($user);
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
            'employee_id' => 'required|max:8|min:8|regex:/^[0-9]+$/',
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'gender' => 'required|string',
            'email' => 'required|string|email',
            'division_id' => 'required',
            'grade_id' => 'required'
            ]);

        $user = User::find($id);
        $user->employee_id = $request->employee_id;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->division_id = $request->division_id;
        $user->grade_id = $request->grade_id;
        $user->save();

        return redirect()->route('employee.index')->withUser($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user ->delete();

        return redirect()->back();
    }
}
