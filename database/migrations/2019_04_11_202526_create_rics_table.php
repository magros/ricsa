<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('Nric');
            $table->string('Npedido');
            $table->string('name_proyect');
            $table->integer('complexity');
            $table->integer('status');
            $table->double('cost');
            $table->string('delivery_place');
            $table->string('description');
            $table->date('estimated_time');
            $table->date('definite_time');
            $table->dateTime('date_start');
            $table->dateTime('date_finish');
            $table->timestamps();
            $table->softDeletes();


            // $table->index('user_id');
            // $table->foreign('user_id')->references('id')->on('users')
            //         ->onDelete('cascade')->onUpdate('cascade');

            // $table->index('customer_id');
            // $table->foreign('customer_id')->references('id')->on('customers')
            //         ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rics');
    }
}
