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
        Schema::table('sgcwts', function (Blueprint $table) {
            $table->unsignedBigInteger('teacher_id')->nullable();

            $table->index('teacher_id', 'sgcwt_user_idx');
            $table->foreign('teacher_id', 'sgcwt_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sgcwts', function (Blueprint $table) {
            $table->dropColumn('teacher_id');
        });
    }
};
