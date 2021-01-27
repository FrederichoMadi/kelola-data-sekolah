<?php

namespace App\Http\Controllers;

use App\Exports\CoursesExport;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CourseController extends Controller
{
    public function index()
    {
        return view('administrator.course.index',[
            'courses'    =>  Course::latest()->paginate(10),
        ]);
    }

    public function cari()
    {
        $cari = request('cari');

        $courses = Course::where('name','like',"%".$cari."%")->paginate(); 
        
        return view('administrator.course.search', [
            'courses' => $courses,
        ]);
       
    }

    public function export_excel()
    {
        return Excel::download(new CoursesExport, 'Data Mata Pelajaran.xlsx');
    }

    public function tambah()
    {
        return view('administrator.course.tambah',[
            'course'    =>  new Course(),
        ]);
    }

    public function store()
    {
        $attr = request()->validate([
            'name'  =>  'required',
        ]);

        $attr['slug'] = Str::slug(request('name'));

        $config = [
            'table' =>  'courses',
            'field' =>  'kode_course',
            'length'    =>  '8',
            'prefix'    => 'ABC-',
        ];
        $id = IdGenerator::generate($config);
        $attr['kode_course'] = $id;
        Course::create($attr);

        return back()->with('success', 'Data Mata Pelajaran berhasil ditambahkan');
    }

    public function edit(Course $course)
    {
        return view('administrator.course.edit',[
            'course'   =>   $course,
        ]);
    }

    public function update(Course $course)
    {
        $attr = request()->validate([
            'name'  =>  'required',
        ]);

        $course->update($attr);

        session()->flash('success', 'Data Mata Pelajara berhasil diedit');

        return redirect('courses');
    }

    public function delete(Course $course)
    {
        $course->delete();

        return back()->with('success', 'Data telah dihapus');
    }

    
}
