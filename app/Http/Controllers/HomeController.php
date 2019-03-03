<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchased_courses = NULL;
        if (\Auth::check()) {
            $purchased_courses = Course::whereHas('students', function ($query){
                $query->where('id', \Auth::id());
            })->orderBy('id', 'desc')
                ->get();
        }
        $courses = Course::where('published', 1)->orderBy('id', 'desc')->get();
        return view('index', compact('courses', 'purchased_courses'));
    }
}
