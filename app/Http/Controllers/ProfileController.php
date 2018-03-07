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
        $divisions = Division::all();
        $grades = Grade::all();

        $users = User::all();

        return view('profile.profile')->withUsers($users);
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
		$divisions = Division::all();
        $grades = Grade::all();
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
        $this->validate($request, [
            'employee_id' => 'required|string|max:8|min:8',
            'name' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'division_id' => 'required',
            'grade_id' => 'required'
            ]);

        $user = User::find(Auth::user()->id);
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