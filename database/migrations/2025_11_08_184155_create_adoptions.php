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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
    
            // ✅ First, create the column
            $table->unsignedBigInteger('pet_id');
    
            // ✅ Then, add the foreign key constraint
            $table->foreign('pet_id')
                  ->references('pet_id')
                  ->on('tblpost')
                  ->onDelete('cascade');
    
            // Adopter information
            $table->string('full_name', 150);
            $table->integer('age')->nullable();
            $table->string('email', 150);
            $table->string('phone', 50)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('role', 50)->comment('Student, Professor, Staff, or Other');
            $table->string('department', 100)->nullable();
            $table->integer('year_level')->nullable(); // For students only
            $table->string('occupation', 100)->nullable(); // For professors or staff
            $table->string('home_type', 50)->nullable(); // Dorm, Apartment, House
            $table->text('other_pets')->nullable();
            $table->text('experience')->nullable();
            $table->text('adoption_reason');
           
    
            // Adoption process
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
    
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
