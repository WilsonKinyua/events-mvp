<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventScheduleUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('event_schedule_user', function (Blueprint $table) {
            $table->unsignedBigInteger('event_schedule_id');
            $table->foreign('event_schedule_id', 'event_schedule_id_fk_4598920')->references('id')->on('event_schedules')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_4598920')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
