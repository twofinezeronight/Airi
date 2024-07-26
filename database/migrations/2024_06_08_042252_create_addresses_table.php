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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('province'); //Đây là cột để lưu thông tin về tỉnh hoặc thành phố.
            $table->string('district'); //Cột này lưu thông tin về huyện hoặc quận.
            $table->string('ward'); //Cột này lưu thông tin về phường, xã hoặc làng.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
