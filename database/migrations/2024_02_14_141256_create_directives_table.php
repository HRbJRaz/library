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
        Schema::create('directives', function (Blueprint $table) {
            $table->id();
            $table->string('number', 20);
            $table->string('reference', 50);
            $table->string('title', 255);
            $table->date('effective_date');
            $table->string('expiry_condition', 255);
            $table->string('status', 20);
            $table->string('url', 255);
            $table->integer('prepared_by');
            $table->integer('endorsed_by');
            $table->datetime('endorsed_at');
            $table->integer('checked_by');
            $table->datetime('checked_at');
            $table->integer('approved_by');
            $table->datetime('approved_at');
            $table->string('publisher', 10);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directives');
    }
};
