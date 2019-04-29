<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManpowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manpowers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('ric_id')->unsigned();
            $table->string('description')->nullable();
            $table->double('price_hour')->nullable();
            $table->double('net_weight')->nullable();
            $table->double('cadence')->nullable();
            $table->string('hours')->nullable();
            $table->double('costo')->nullable();
            $table->double('total')->nullable();
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
        Schema::dropIfExists('manpowers');
    }
}
