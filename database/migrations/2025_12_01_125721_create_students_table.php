<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->char('sid', 5)->primary();             
            $table->string('sname', 50);                  
            $table->string('phone', 24)->nullable();     
            $table->string('email', 50)->unique();       
            $table->string('address', 100)->nullable();  
            $table->integer('yearLevel')->default(1);    
            $table->string('password',255); 
            // Foreign Key
            $table->char('aid', 5)->nullable();                      
            $table->foreign('aid')
                  ->references('aid')
                  ->on('assignments')
                  ->onDelete('cascade');                
            $table->timestamps();                          
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
