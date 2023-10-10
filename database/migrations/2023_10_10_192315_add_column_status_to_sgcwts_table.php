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
            $table->unsignedBigInteger('status_id')->nullable();

            $table->index('status_id', 'sgcwt_status_idx');
            $table->foreign('status_id', 'sgcwt_status_fk')->on('statuses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sgcwts', function (Blueprint $table) {
            $table->dropColumn('status_id');
        });
    }
};
