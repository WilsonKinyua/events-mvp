<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEventSchedulesTable extends Migration
{
    public function up()
    {
        Schema::table('event_schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('event_program_date_id');
            $table->foreign('event_program_date_id', 'event_program_date_fk_4598915')->references('id')->on('agenda_dates');
        });
    }
}
