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
        Schema::dropIfExists('law_firms');
        Schema::create('law_firms', function (Blueprint $table) {
            $table->id();
            $table->string('law_firm',40);
            $table->string('firmImage');
            $table->string('firmHeading',30);
            $table->string('firmPara',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('law_firms');
    }
};
