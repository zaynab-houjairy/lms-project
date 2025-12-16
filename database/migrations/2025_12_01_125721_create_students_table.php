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
        Schema::create('students', function (Blueprint $table) {
            $table->char('sid', 5)->primary();             // مفتاح أساسي
            $table->string('sname', 50);                   // اسم الطالب (زودنا الطول ليكون أكثر مرونة)
            $table->string('phone', 24)->nullable();       // رقم الهاتف اختياري
            $table->string('email', 50)->unique();         // البريد الإلكتروني فريد
            $table->string('address', 100)->nullable();    // العنوان اختياري
            $table->integer('yearLevel')->default(1);      // السنة الدراسية، الافتراضي 1 
            $table->string('password',255); 
            // Foreign Key
            $table->char('aid', 5)->nullable();                        // مفتاح أجنبي إلى assignments
            $table->foreign('aid')
                  ->references('aid')
                  ->on('assignments')
                  ->onDelete('cascade');                 // حذف الطالب عند حذف الواجب المرتبط

            $table->timestamps();                          // created_at و updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
