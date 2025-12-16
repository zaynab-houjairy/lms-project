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
        Schema::create('teachers', function (Blueprint $table) {
            $table->char('tid', 5)->primary();          // مفتاح أساسي
            $table->string('tname', 30);                 // اسم المعلم
            $table->string('phone', 24)->nullable();    // رقم الهاتف اختياري
            $table->string('email', 50)->unique();      // البريد الإلكتروني فريد
            $table->string('address', 100)->nullable(); // العنوان اختياري
            $table->string('specialization', 50)->nullable();
            $table->string('password',255); // التخصص اختياري
            $table->timestamps();                       // created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
