<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\Grade;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$division = Division::all();
    	$grade = Grade::all();
        return view('dashboard')->withDivision($division)->withGrade($grade);
    }

    public function dataTable()
    {
        return Datatables::of(Table::query())->make(true);
    }
    public function show($id)
    {
        //
    }

}
