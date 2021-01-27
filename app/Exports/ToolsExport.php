<?php

namespace App\Exports;

use App\Models\Tool;
use Maatwebsite\Excel\Concerns\FromCollection;

class ToolsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tool::all();
    }
}
