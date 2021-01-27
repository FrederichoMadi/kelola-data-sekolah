<?php

namespace App\Http\Controllers;

use App\Exports\JournalsExport;
use App\Models\Journal;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class JournalController extends Controller
{
    public function index()
    {
        return view('administrator.journal.index',[
            'journals' => Journal::latest()->paginate(10),
        ]);
    }

    public function cari()
    {
        $cari = request('cari');

        $journals = Journal::where('judul','like',"%".$cari."%")->paginate(); 
        
        return view('administrator.journal.search', [
            'journals' => $journals,
        ]);
       
    }

    public function export_excel()
    {
        return Excel::download(new JournalsExport, 'Berita sekolah.xlsx');
    }


    public function tambah()
    {
        return view('administrator.journal.tambah', [
            'journal'   =>  new Journal(),
        ]);
    }

    public function store()
    {
        $attr = request()->validate([
            'thumbnail' =>  'required|image|mimes:png,jpg,jpeg,svg|max:10048',
            'judul'     =>  'required',
            'berita'    =>  'required',
        ]);

        $attr['slug'] = Str::slug(request('judul'));
        
        // tambah gambar
        $thumbnail = request('thumbnail') ? request()->file('thumbnail')->store('images/journal') : null;

        $attr['thumbnail'] = $thumbnail;

        Journal::create($attr);

        return back()->with('success', 'Berita baru telah ditambahkan');

    }

    public function edit(Journal $journal)
    {
        return view('administrator.journal.edit',[
            'journal'   =>  $journal,
        ]);
    }

    public function update(Journal $journal)
    {
        $attr = request()->validate([
            'thumbnail' =>  'nullable|image|mimes:png,jpg,jpeg,svg|max:10048',
            'judul'     =>  'required',
            'berita'    =>  'required',
        ]);

        if(request()->file('thumbnail')){
            Storage::delete($journal->thumbnail);
            $thumbnail = request()->file('thumbnail')->store('images/journal');
        }else{
            $thumbnail = $journal->thumbnail;
        }

        $attr['thumbnail'] = $thumbnail;

        $journal->update($attr);

        session()->flash('success', 'Berita telah berhasil diperbarui');

        return redirect('journals');
    }

    public function destroy(Journal $journal)
    {
        Storage::delete($journal->thumbnail);
        $journal->delete();

        session()->flash('success', "Data telah dihapus");

        return redirect('journals');
    }
}
