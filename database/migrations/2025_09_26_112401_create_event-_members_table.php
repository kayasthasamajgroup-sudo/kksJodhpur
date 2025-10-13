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
        Schema::create('event_members', function (Blueprint $table) {
            $table->id();
           
            $table->string('member_name');
            $table->string('phone');
            $table->string('email');
            $table->string('home_address');
            $table->string('event_name');
            $table->string('receipt_photo')->nullable();
            $table->integer('family_members')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event-_members');
    }
};
