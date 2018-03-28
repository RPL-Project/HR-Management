<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Division;
use Auth;

class PrintController extends Controller
{
    public function index(){

    	$user = User::select('users.id','employee_id','name','division_salary','grade_salary')
            ->join('divisions', 'users.division_id', '=', 'divisions.id')
            ->join('grades', 'users.grade_id', '=', 'grades.id')
            ->get();

        $users = User::find(Auth::user()->id)
            ->join('divisions', 'users.division_id', '=', 'divisions.id')
            ->join('grades', 'users.grade_id', '=', 'grades.id')
            ->where('users.id','=',Auth::user()->id)
            ->get();

    	return view('salary.prints',compact('users'))->withUser($user);
    }

}
