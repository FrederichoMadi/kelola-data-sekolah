<?php

namespace App\Exports;

use App\Models\Journal;
use Maatwebsite\Excel\Concerns\FromCollection;

class JournalsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Journal::all();
    }
}
