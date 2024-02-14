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
        Schema::create('instructions', function (Blueprint $table) {
            $table->id();
            $table->string('type', 10);
            $table->string('number', 50);
            $table->string('reference', 50);
            $table->string('title', 255);
            $table->date('effective_date');
            $table->string('expiry_condition', 255);
            $table->string('status', 50);
            $table->string('URL', 255);
            $table->string('publisher', 30);
            $table->integer('prepared_by');
            $table->integer('endorsed_by');
            $table->datetime('endorsed_at');
            $table->integer('reviewed_by');
            $table->datetime('reviewed_at');
            $table->integer('approved_by');
            $table->datetime('approved_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructions');
    }
};
