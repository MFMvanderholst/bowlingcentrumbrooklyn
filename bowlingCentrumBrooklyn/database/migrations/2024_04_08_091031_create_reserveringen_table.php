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
        Schema::create('reserverings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persoonId');
            $table->foreignId('openingstijdId');
            $table->foreignId('tariefId');
            $table->foreignId('baanId');
            $table->foreignId('pakketOptieId')->nullable();
            $table->foreignId('reserveringStatusId');
            $table->bigInteger('reserveringsNummer');
            $table->date('datum');
            $table->integer('aantaluren');
            $table->time('begintijd');
            $table->time('eindtijd');
            $table->integer('aantalVolwassen');
            $table->integer('aantalKinderen')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserverings');
    }
};
