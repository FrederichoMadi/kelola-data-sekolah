<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Journal;
use App\Models\Teacher;
use App\Models\Tool;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Course $course, Journal $journal, Teacher $teacher, Tool $tool)
    {
        return view('administrator.dashboard',[
            'course'    =>  $course,
            'journal'    =>  $journal,
            'teacher'    =>  $teacher,
            'tool'    =>  $tool,
        ]);
    }
}
