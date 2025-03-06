<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookingmanagement', function (Blueprint $table) {
            $table->id();
            $table->string('customername');
            $table->string('phone');
            $table->string('typeroom');

            $table->string('roomprice');
            $table->string('roomnumber');
            $table->string('bedtypes');
            $table->string('floornumber');
            $table->string('roomcapacity');
            $table->string('paymentmethod');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingmanagement');
    }
};
