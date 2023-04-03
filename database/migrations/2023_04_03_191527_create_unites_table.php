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
        Schema::create('unites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->integer('idProduit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migratio ns.
     */
    public function down(): void
    {
        Schema::dropIfExists('unites');
    }
};
