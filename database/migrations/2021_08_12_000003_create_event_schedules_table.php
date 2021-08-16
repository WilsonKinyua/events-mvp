<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('event_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('time_start');
            $table->string('time_end');
            $table->string('topic')->unique();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
