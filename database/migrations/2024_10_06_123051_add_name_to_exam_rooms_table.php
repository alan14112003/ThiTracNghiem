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
        Schema::table('exam_rooms', function (Blueprint $table) {
            $table->string('name')->after('room_code'); // Thêm trường 'name' sau 'room_code'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_rooms', function (Blueprint $table) {
            //
        });
    }
};
