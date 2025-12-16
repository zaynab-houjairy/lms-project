<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Enrollment;
class EnrollmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enrollment')->insert([
            ['sid'=>'S001','cid'=>'C001'],
            ['sid'=>'S001','cid'=>'C002'],
            ['sid'=>'S002','cid'=>'C002'],
        ]);
    }
}