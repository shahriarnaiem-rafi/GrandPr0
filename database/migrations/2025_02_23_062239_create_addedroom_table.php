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
        Schema::create('addedroom', function (Blueprint $table) {
            $table->id();
            $table->string('typeroom');
            $table->string('roomprice');

            $table->string('roomsize');
            $table->string('roomnumber');
            $table->string('bedtypes');
            $table->string('floornumber');
            $table->string('roomview');
            
            $table->string('roomcapacity');
            $table->string('description');
            $table->string('roomphoto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addedroom');
    }
};
