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
        Schema::create('members', function (Blueprint $table) {
       
                $table->id();
                $table->string('member_name');
                $table->string('spouse_name')->nullable();
                $table->integer('age')->nullable();
                $table->date('dob')->nullable();
                $table->string('father_name')->nullable();
                $table->string('mother_name')->nullable();
                $table->string('sub_caste')->nullable();
                $table->string('gotra')->nullable();
        
                $table->string('qualification')->nullable();
                $table->string('profession')->nullable();
                $table->string('parental_place')->nullable();
                $table->text('postal_address')->nullable();
                $table->text('office_address')->nullable();
                $table->string('email')->unique();
                $table->string('phone')->nullable();
                $table->string('family_members')->nullable();
        
                $table->string('pic_path')->nullable();
                $table->string('sign_path')->nullable();
                $table->string('receipt_path')->nullable();
        
                $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
