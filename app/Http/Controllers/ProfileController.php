<?php
// Ini kodingan saya.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\user;
use App\Division;
use App\Grade;
use Auth;

class ProfileController extends Controller
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
        $users = User::find(Auth::user()->id)
            ->select('division_status', 'grade_status')
            ->join('divisions', 'users.division_id', '=', 'divisions.id')
            ->join('grades', 'users.grade_id', '=', 'grades.id')
            ->where('users.id','=',Auth::user()->id)
            ->get();

        return view('profile.profile',compact('users'))->withUser($users);
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
    public function edit()
    {
		$divisions = Division::select('*')
        ->where('status', '=', 'accept')
        ->get();
        $grades = Grade::select('*')
        ->where('status', '=', 'accept')
        ->get();
        $user = User::find(Auth::user()->id);

        return view('profile.updateprofile', compact('divisions','grades'))->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $this->validate($request, [
            'employee_id' => 'required|max:11|min:11|regex:/^[0-9]+$/|unique:users,employee_id,'.$user->id,
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'gender' => 'required|string',
            'email' => 'required|string|email|unique:users,email,'.$user->id,
            'division_id' => 'required',
            'grade_id' => 'required'
            ]);

        $user->employee_id = $request->employee_id;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->division_id = $request->division_id;
        $user->grade_id = $request->grade_id;
        $user->save();

        return redirect()->route('profile.index')->withUser($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}