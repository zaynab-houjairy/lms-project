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
        Schema::create('materials', function (Blueprint $table) {
            $table->char('mid', 5)->primary();        // مفتاح أساسي
            $table->string('title', 70);             // عنوان المادة
            $table->char('cid', 5);                   // مفتاح أجنبي إلى courses

            // المفتاح الأجنبي
            $table->foreign('cid')
                  ->references('cid')
                  ->on('courses')
                  ->onDelete('cascade');             // حذف المادة عند حذف الكورس

            $table->timestamps();                      // created_at و updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
