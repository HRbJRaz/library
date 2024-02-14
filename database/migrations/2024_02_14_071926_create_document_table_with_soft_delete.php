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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('type', 20);
            $table->string('format', 20);
            $table->string('number', 20);
            $table->integer('issue');
            $table->integer('revision');
            $table->date('effective_date');
            $table->string('url', 255);
            $table->string('coverpage', 255);
            $table->integer('owner');
            $table->integer('reviewer')->nullable();
            $table->dateTime('review_date')->nullable();
            $table->integer('approver')->nullable();
            $table->dateTime('approval_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
