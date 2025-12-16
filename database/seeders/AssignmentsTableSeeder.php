<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assignment;
class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assignment::create(['aid'=>'A001','cid'=>'C001','tid'=>'T001','due_date'=>'2025-12-10']);
Assignment::create(['aid'=>'A002','cid'=>'C002','tid'=>'T002','due_date'=>'2025-12-15']);
    }
}