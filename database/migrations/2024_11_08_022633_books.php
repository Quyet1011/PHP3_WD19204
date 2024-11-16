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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Mã sách
            $table->string('title', 255); // Tiêu đề sách
            $table->string('thumbnail', 255)->nullable(); // Ảnh mô tả
            $table->string('author', 255); // Tác giả
            $table->string('publisher', 255); // Nhà xuất bản
            $table->dateTime('publication'); // Ngày xuất bản
            $table->double('price'); // Giá bán
            $table->integer('quantity'); // Số lượng
            $table->foreignId('category_id')->constrained(); // Mã loại (khóa ngoại)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
