<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

   public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->char('aid', 5)->primary();        
            $table->dateTime('due_date');           
            $table->char('tid', 5);               
            $table->char('cid', 5);                    

            
            $table->foreign('tid')
                  ->references('tid')
                  ->on('teachers')
                  ->onDelete('cascade');           

            $table->foreign('cid')
                  ->references('cid')
                  ->on('courses')
                  ->onDelete('cascade');               

            $table->timestamps();                       
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
