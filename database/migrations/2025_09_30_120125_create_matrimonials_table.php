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
        Schema::create('matrimonials', function (Blueprint $table) {
            $table->id();
            $table->string('createdBy');
            $table->string('person_name');
            $table->integer('age');
            $table->string('marital_status');
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->string('sub_cast');
            $table->string('gotra');
    
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('mother_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('qualification');
            $table->string('profession');
            $table->string('hobbies')->nullable();
    
            $table->text('postal_address');
            $table->string('pic')->nullable();
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matrimonials');
    }
};
