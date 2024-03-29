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
        Schema::create('metas', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('user_id');
            $table->enum('initiator', ['app', 'user'])->default('user');
            $table->timestamps();
            $table->string('name');
            $table->string('metable_id');
            $table->string('metable_type');
            $table->longText('content');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};
