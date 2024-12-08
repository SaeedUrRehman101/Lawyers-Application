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
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id();
            $table->string("userName",50);
            $table->string("email",50)->unique();
            $table->string("password");
            $table->date("dob")->nullable();
            $table->string("contact",20)->nullable()->unique();
            $table->string("Address",100)->nullable();
            $table->string("bio")->nullable();
            $table->string("states",20)->nullable();
            $table->string("role",10)->default("user");
            $table->string("image",100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_accounts');
    }
};
