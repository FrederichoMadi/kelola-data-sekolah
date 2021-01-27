<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses =  collect([
            'Matematika',
            'Ilmu Pengetahuan Alam',
            'Ilmu Pengetahuan Sosial',
            'Seni Budaya',
            'Pendidikan Kewarganegaraan(PKn)',
            'Bahasa Indonesia',
            'Pendidikan Jasamani, Olaharaga dan Kesehatan',
        ]);

        $courses->each(function ($course){
            Course::create([
                'name'  =>  $course,
                'slug'  =>  Str::slug($course),
            ]);
        });

    }
}
