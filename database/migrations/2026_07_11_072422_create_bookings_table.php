<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            // Basic Visit Information
            $table->string('organization_name');
            $table->date('date');

            // Visit Schedule
            $table->time('arrival_time');
            $table->time('end_time');
            $table->time('port_tour_time');
            $table->time('escort_booking_time');

            // Safety Briefing
            $table->string('safety_briefing_venue');
            $table->time('safety_briefing_time');
            $table->string('safety_briefing_language');

            // Additional Requests
            $table->boolean('signage')->default(false);
            $table->boolean('souvenir')->default(false);

            // Foreign Keys
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->onDelete('cascade');

            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};