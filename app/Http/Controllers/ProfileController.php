<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\user;
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
        $user = User::find(Auth::user()->id);
        return view('profile.updateprofile')->withUser($user);
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
            'employee_id' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required'
            ]);

        $user = User::find($id);
        $user->employee_id = $request->employee_id;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}