<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->char('cid', 5)->primary();           // مفتاح أساسي للكورس
            $table->string('cname', 50);                 // اسم الكورس
            $table->string('description', 255)->nullable(); // وصف الكورس اختياري
            $table->char('tid', 5);                      // مفتاح أجنبي إلى teachers

            $table->foreign('tid')                       // تعريف المفتاح الأجنبي
                  ->references('tid')
                  ->on('teachers')
                  ->onDelete('cascade');               // حذف الكورس عند حذف المعلم

            $table->timestamps();                        // created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
