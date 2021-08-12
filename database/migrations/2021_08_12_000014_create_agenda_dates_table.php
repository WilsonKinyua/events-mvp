<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaDatesTable extends Migration
{
    public function up()
    {
        Schema::create('agenda_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('agenda_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
