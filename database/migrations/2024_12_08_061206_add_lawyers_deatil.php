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
        Schema::table('lawyers_detail', function (Blueprint $table) {
            $table->string('areas',100)->nullable();
            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->string('about')->nullable();
            $table->string('working_Place')->nullable();
            $table->date("Lawyer_dob")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lawyers_detail', function (Blueprint $table) {
            //
        });
    }
};
