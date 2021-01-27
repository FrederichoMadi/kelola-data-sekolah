<?php

namespace App\Http\Controllers;

use App\Exports\TeachersExport;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    public function index()
    {
        return view('administrator.guru.index',[
            'teachers'  =>  Teacher::latest()->paginate(10),
        ]);
    }

    public function cari()
    {
        $cari = request('cari');

        $teachers = Teacher::where('name','like',"%".$cari."%")->paginate(); 
        
        return view('administrator.guru.search', [
            'teachers' => $teachers,
        ]);
       
    }

    public function export_excel()
    {
        return Excel::download(new TeachersExport, 'Data Guru.xlsx');
    }

    public function tambah()
    {
        return view('administrator.guru.tambah', [
            'courses'   =>  Course::get(),
            'teacher'   =>  new Teacher(),  
        ]);
    }

    public function store()
    {
        request()->validate([
            'name'      =>  'required',
            'NIDN'      =>  'required',
            'NIP'       =>  'required',
            'courses'   =>  'required|array',
            'thumbnail' =>  'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10048',
        ]);

        $teacher = Teacher::create([
            'name'      =>  request('name'),
            'NIDN'      =>  request('NIDN'),
            'NIP'       =>  request('NIP'),
            'slug'      =>  Str::slug(request('name')),
            'thumbnail' =>  request('thumbnail') ? request()->file('thumbnail')->store('images/teacher') : null,
        ]);
            
        $teacher->courses()->attach(request('courses'));

        return back()->with('success', 'Data guru berhasil ditambahkan');

    }

    public function edit(Teacher $teacher)
    {
        return view('administrator.guru.edit',[
            'teacher'   =>  $teacher,
            'courses'   =>  Course::get(),
        ]);
    }

    public function update(Teacher $teacher)
    {
        request()->validate([
            'name'      =>  'required',
            'NIDN'      =>  'required',
            'NIP'       =>  'required',
            'courses'   =>  'required|array',
            'thumbnail' =>  'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10048',
        ]);

        if(request()->file('thumbnail')){
            Storage::delete($teacher->thumbnail);
            $thumbnail = request()->file('thumbnail')->store('images/teacher');
        }else{
            $thumbnail = $teacher->thumbnail;
        }

        $teacher->update([
            'name'      =>  request('name'),
            'NIDN'      =>  request('NIDN'),
            'NIP'       =>  request('NIP'),
            'thumbnail' =>  $thumbnail,
        ]);
            
        $teacher->courses()->sync(request('courses'));

        session()->flash('success', 'Data guru telah di update');

        return redirect('teachers');
    }

    public function destroy(Teacher $teacher)
    {
        Storage::delete($teacher->thumbnail);
        $teacher->courses()->detach();
        $teacher->delete();

        session()->flash('success', "Data telah di hapus");

        return redirect('teachers');
    }
}
