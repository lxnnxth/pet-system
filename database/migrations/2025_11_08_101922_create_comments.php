<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Commenter's name
            $table->text('comment'); // The comment content
            $table->unsignedBigInteger('pet_id'); // Link to pet post
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('pet_id')->references('pet_id')->on('tblpost')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
