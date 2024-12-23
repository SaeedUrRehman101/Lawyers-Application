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
        Schema::create('services_detail', function (Blueprint $table) {
            $table->id();
            $table->string('serviceHeading',50);
            $table->string('aboutService'); 
            $table->string('serviceFirms',100);
            $table->string('serviceImg',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_detail');
    }
};
