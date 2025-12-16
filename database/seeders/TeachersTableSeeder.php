<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create(['tid'=>'T001','tname'=>'Ali Ahmad','phone'=>'0700000000','email'=>'ali@example.com','address'=>'Beirut','specialization'=>'Math','password'=>'12z3']);
Teacher::create(['tid'=>'T002','tname'=>'Sara Khalil','phone'=>'0700000001','email'=>'sara@example.com','address'=>'Tripoli','specialization'=>'Physics','password'=>'12a3']);
    }
}
