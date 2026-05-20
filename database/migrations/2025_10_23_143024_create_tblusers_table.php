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
        Schema::create('tblusers', function (Blueprint $table) {
            $table->increments('user_id'); // Primary key, auto-increment
            $table->string('username', 255)->index();
            $table->string('full_name', 255);
            $table->string('email', 255)->index();
            $table->string('password', 255); 
   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblusers');
    }
};
