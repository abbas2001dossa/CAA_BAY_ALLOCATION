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
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nsfp_id');
            $table->date('request_date');
            $table->string('dept_ap');
            $table->string('arr_ap');
            $table->string('op_name');
            $table->string('op_code');
            $table->string('flight_no');
            $table->datetime('dept_time');
            $table->datetime('arr_time');
            $table->string('model');
            $table->char('sector');
            $table->char('request_status');
            $table->char('flight_type');
            $table->char('request_for');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
