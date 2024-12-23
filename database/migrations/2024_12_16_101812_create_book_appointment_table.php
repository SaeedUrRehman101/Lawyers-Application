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
        Schema::create('book_appointment', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('lawyerId');
            $table->string('userName',50);
            $table->string('email',50)->unique();
            $table->string('contact',20)->unique();
            $table->string('message');
            $table->string('slots');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_appointment');
    }
};
