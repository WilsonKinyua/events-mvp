<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('interest_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_4567689')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('interest_id');
            $table->foreign('interest_id', 'interest_id_fk_4567689')->references('id')->on('interests')->onDelete('cascade');
        });
    }
}
