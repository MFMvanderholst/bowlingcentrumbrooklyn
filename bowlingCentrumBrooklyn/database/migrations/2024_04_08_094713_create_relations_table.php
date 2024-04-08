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
        Schema::table('reserverings', function (Blueprint $table) {
            $table->foreign('persoonId')
                ->references('id')
                ->on('persoons');
        });

        Schema::table('spels', function (Blueprint $table) {
            $table->foreign('persoonId')
                ->references('id')
                ->on('persoons');
                $table->foreign('reserveringId')
                ->references('id')
                ->on('reserverings');
        });

        Schema::table('uitslags', function (Blueprint $table) {
            $table->foreign('spelId')
                ->references('id')
                ->on('spels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
