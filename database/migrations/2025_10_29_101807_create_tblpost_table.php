<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tblpost', function (Blueprint $table) {
            $table->id('pet_id'); // auto-increment primary key
            $table->string('pet_name');
            $table->string('type');
            $table->integer('age')->nullable();
            $table->string('breed')->nullable();
            $table->text('description');
            $table->string('media');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); 
            $table->string('owner_name');
            $table->string('owner_email');
            $table->string('owner_contact');
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tblpost');
    }
};
