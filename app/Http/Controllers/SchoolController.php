<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SchoolController extends Controller
{
    public function index()
    {
        return view('administrator.sekolah.index', [
            'school'    =>  School::latest()->paginate(1),
        ]);
    }

    public function tambah()
    {
        return view('administrator.sekolah.tambah',[
            'school'    =>  new School(),
        ]);
    }

    public function store()
    {
        $attr = request()->validate([
            'thumbnail'     =>  'nullable|image|mimes:png,jpg,svg,jpeg|max:10048',
            'nama_sekolah'  =>  'required',
            'alamat'        =>  'required',
            'telepon'       =>  'required',
            'email'         =>  'required',
            'sejarah'       =>  'required',
            'visi_misi'     =>  'required',
        ]);

        $attr['slug'] = Str::slug(request('nama_sekolah'));

        $thumbnail = request('thumbnail') ?  request()->file('thumbnail')->store('images/school') : null;

        $attr['thumbnail'] = $thumbnail;

        School::create($attr);

        return back()->with('success', 'Data Sekolah berhasil ditambahkan');
        
    }

    public function edit(School $school)
    {
        return view('administrator.sekolah.edit', [
            'school'    =>  $school,
        ]);
    }

    public function update(School $school)
    {
        $attr = request()->validate([
            'thumbnail'     =>  'nullable|image|mimes:png,jpg,svg,jpeg|max:10048',
            'nama_sekolah'  =>  'required',
            'alamat'        =>  'required',
            'telepon'       =>  'required',
            'email'         =>  'required',
            'sejarah'       =>  'required',
            'visi_misi'     =>  'required',
        ]);

        if(request()->file('thumbnail')){
            Storage::delete($school->thumbnail);
            $thumbnail = request()->file('thumbnail')->store('images/school');
        } else{
            $thumbnail = $school->thumbnail;
        }

        $attr['thumbnail'] = $thumbnail;

        $school->update($attr);

        session()->flash('success', 'Data Telah di update');

        return redirect('schools');
    }
}
