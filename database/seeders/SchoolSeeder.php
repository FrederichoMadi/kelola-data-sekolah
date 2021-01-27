<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
            'thumbnail'     =>  NULL,
            'nama_sekolah'  =>  'Sekolahku',
            'slug'          =>  Str::slug('nama_sekolah'),
            'alamat'        =>  'Jl. Bung karno no 1',
            'telepon'       =>  '28312083',
            'email'         =>  'sekolahku@gmail.com',
            'sejarah'       =>  'sejarah',
            'visi_misi'     =>  'visi_misi',
        ]);
    }
}
