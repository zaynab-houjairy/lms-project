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
        Schema::create('assignments', function (Blueprint $table) {
            $table->char('aid', 5)->primary();          // مفتاح أساسي
            $table->dateTime('due_date');               // تاريخ ووقت التسليم
            $table->char('tid', 5);                     // مفتاح أجنبي إلى teachers
            $table->char('cid', 5);                     // مفتاح أجنبي إلى courses

            // تعريف المفاتيح الأجنبية
            $table->foreign('tid')
                  ->references('tid')
                  ->on('teachers')
                  ->onDelete('cascade');               // حذف الواجب عند حذف المعلم

            $table->foreign('cid')
                  ->references('cid')
                  ->on('courses')
                  ->onDelete('cascade');               // حذف الواجب عند حذف الكورس

            $table->timestamps();                        // created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
