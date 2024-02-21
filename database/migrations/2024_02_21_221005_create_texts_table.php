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
        Schema::create('texts', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->timestamps();
            $table->string('name')->after('id');
            $table->string('container_id')->after('id');
            
            $table->foreign('container_id')->references('id')->on('containers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('texts');
    }
};
