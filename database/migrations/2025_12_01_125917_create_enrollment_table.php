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
        Schema::create('enrollment', function (Blueprint $table) {
            $table->char('sid', 5);  // مفتاح أجنبي إلى students
            $table->char('cid', 5);  // مفتاح أجنبي إلى courses

            $table->primary(['sid', 'cid']);  // المفتاح الأساسي مركب

            // المفاتيح الأجنبية
            $table->foreign('sid')
                  ->references('sid')
                  ->on('students')
                  ->onDelete('cascade');  // حذف السجل إذا تم حذف الطالب

            $table->foreign('cid')
                  ->references('cid')
                  ->on('courses')
                  ->onDelete('cascade');  // حذف السجل إذا تم حذف الكورس

            $table->timestamps();  // لتتبع وقت التسجيل
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment');
    }
};
