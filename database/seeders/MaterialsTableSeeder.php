<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;
class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create(['mid'=>'M001','cid'=>'C001','title'=>'Algebra Chapter 1 Notes']);
Material::create(['mid'=>'M002','cid'=>'C002','title'=>'Physics Chapter 1 Notes']);
    }
}