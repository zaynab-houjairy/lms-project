<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
   public function up(): void
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->char('mid', 5)->primary();   
            $table->string('title', 70);          
            $table->char('cid', 5);                  

           
            $table->foreign('cid')
                  ->references('cid')
                  ->on('courses')
                  ->onDelete('cascade');       

            $table->timestamps();                     
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
