<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create(['sid'=>'S001','sname'=>'Zaynab Houjairy','phone'=>'0700000002','email'=>'zaynab@example.com','address'=>'Beirut','yearLevel'=>'2025','aid'=>'A001','password'=>'1234y']);
Student::create(['sid'=>'S002','sname'=>'Omar Saad','phone'=>'0700000003','email'=>'omar@example.com','address'=>'Tripoli','yearLevel'=>'2025','aid'=>'A002','password'=>'123t']);
    }
}