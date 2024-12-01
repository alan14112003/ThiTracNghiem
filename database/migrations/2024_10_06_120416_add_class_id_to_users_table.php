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
        Schema::table('users', function (Blueprint $table) {
            // Thêm trường class_id và thiết lập ràng buộc khóa ngoại
            $table->unsignedBigInteger('class_id')->nullable()->after('id');
            $table->foreign('class_id')->references(columns: 'id')->on('classrooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
        // Xóa ràng buộc khóa ngoại và cột class_id
        $table->dropForeign(['class_id']);
        $table->dropColumn('class_id');
    });
    }
};
