<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

 public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->char('tid', 5)->primary();       
            $table->string('tname', 30);              
            $table->string('phone', 24)->nullable();   
            $table->string('email', 50)->unique();      
            $table->string('address', 100)->nullable(); 
            $table->string('specialization', 50)->nullable();
            $table->string('password',255); 
            $table->timestamps();                       
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
