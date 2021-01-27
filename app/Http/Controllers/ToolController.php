<?php

namespace App\Http\Controllers;

use App\Exports\ToolsExport;
use App\Models\Tool;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ToolController extends Controller
{
    public function index()
    {
        return view('administrator.tool.index', [
            'tools'  =>  Tool::latest()->paginate(10),
        ]);
    }

    public function cari()
    {
        $cari = request('cari');

        $tools = Tool::where('name','like',"%".$cari."%")->paginate(); 
        
        return view('administrator.tool.search', [
            'tools' => $tools,
        ]);
       
    }

    public function export_excel()
    {
        return Excel::download(new ToolsExport, 'Data Peralatan sekolah.xlsx');
    }

    public function tambah()
    {
        return view('administrator.tool.tambah', [
            'tool'  =>  new Tool(),
        ]);
    }

    public function store()
    {
        $attr = request()->validate([
            'thumbnail' =>  'required|image|mimes:png,jpg,jpeg,svg|max:10048',
            'name'      =>  'required',
            'jumlah'    =>  'required',
        ]);

        $attr['slug'] = Str::slug(request('name'));

        $thumbnail = request('thumbnail') ? request()->file('thumbnail')->store('images/tool') : null;

        $attr['thumbnail'] = $thumbnail;

        Tool::create($attr);

        return back()->with('success', 'Data Peralatan telah ditambahkan');
    }

    public function edit(Tool $tool)
    {
        return view('administrator.tool.edit', [
            'tool'  =>  $tool,
        ]);
    }

    public function update(Tool $tool)
    {
        $attr = request()->validate([
            'thumbnail' =>  'nullable|image|mimes:png,jpg,jpeg,svg|max:10048',
            'name'      =>  'required',
            'jumlah'    =>  'required',
        ]);

        if(request()->file('thumbnail')){
            Storage::delete($tool->thumbnail);
            $thumbnail = request()->file('thumbnail')->store('images/tool');
        } else{
            $thumbnail = $tool->thumbnail;
        }

        $attr['thumbnail'] = $thumbnail;

        $tool->update($attr);

        session()->flash('success', 'Data telah berhasil di perbarui');

        return redirect('tools');
    }

    public function delete(Tool $tool)
    {
        Storage::delete($tool->thumbnail);
        $tool->delete();

        session()->flash('success', 'Data peralatan telah berhasil dihapus');

        return redirect('tools');
    }
}
