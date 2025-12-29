<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

   public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->char('cid', 5)->primary();          
            $table->string('cname', 50);                 
            $table->string('description', 255)->nullable(); 
            $table->char('tid', 5);                      

            $table->foreign('tid')                     
                  ->references('tid')
                  ->on('teachers')
                  ->onDelete('cascade');               

            $table->timestamps();                        
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
