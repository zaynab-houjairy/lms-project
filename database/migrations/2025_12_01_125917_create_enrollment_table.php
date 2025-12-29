<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('enrollment', function (Blueprint $table) {
            $table->char('sid', 5);  
            $table->char('cid', 5);  

            $table->primary(['sid', 'cid']);  

            $table->foreign('sid')
                  ->references('sid')
                  ->on('students')
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
        Schema::dropIfExists('enrollment');
    }
};
