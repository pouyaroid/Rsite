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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');               // عنوان پکیج (مثلا تور پاریس)
            $table->string('duration')->nullable(); // مدت (5 روز، یک هفته و...)
            $table->text('description')->nullable(); // توضیح
            $table->decimal('price', 12, 0);       // قیمت (مثلا 5000000)
            $table->string('image')->nullable();   // تصویر
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
