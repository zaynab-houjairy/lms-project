<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create(['cid'=>'C001','tid'=>'T001','cname'=>'Algebra 101','description'=>'Basic algebra course']);
Course::create(['cid'=>'C002','tid'=>'T002','cname'=>'Physics 101','description'=>'Intro to physics']);
    }
}