<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('event_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_name');
            $table->longText('about');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
