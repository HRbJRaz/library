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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('type', 10);
            $table->string('number', 50);
            $table->string('reference', 50)->nullable();
            $table->string('title', 255);
            $table->date('issue_date');
            $table->string('url', 255)->nullable();
            $table->string('publisher', 30)->nullable();
            $table->integer('prepared_by');
            $table->integer('approved_by')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
