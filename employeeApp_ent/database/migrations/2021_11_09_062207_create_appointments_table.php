<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patientName');
            $table->string('DoctorName');
            $table->integer('contactNo');
            $table->string('email')->unique();
            $table->string('address', 500);
            $table->enum('gender', ['Male', 'Female']);
            $table->string('symptoms');
            $table->time('appointmentTime');
            $table->date('appointmentDate');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
