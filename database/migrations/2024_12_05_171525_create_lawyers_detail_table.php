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
        Schema::create('lawyers_detail', function (Blueprint $table) {
            $table->id();
            $table->string("lawyerName",50);
            $table->string("contact",20)->unique();
            $table->string("email",50)->unique();
            $table->string("password");
            $table->string("image",100);
            $table->string("designation",30);
            $table->string("qualification",100);
            $table->string("province",30);
            $table->string("address",100);
            $table->string("barLicense",40);
            $table->string("Court_Enrollment_No",40);
            $table->string("role",10)->default("lawyer");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers_detail');
    }
};
