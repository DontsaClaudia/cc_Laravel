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
        Schema::create('contrat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',50);
            $table->string('date',50);
            $table->string('duree',50);
            $table->unsignedInteger('id_client');
            $table->foreign(('id_client'))->references('id')->on('client')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat');
    }
};
