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
            $table->String('name')->nullable();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('Nric')->nullable();
            $table->string('Npedido')->nullable();
            $table->string('name_proyect')->nullable();
            $table->integer('complexity')->nullable();
            $table->integer('status')->nullable();
            $table->double('cost')->nullable();
            $table->string('delivery_place')->nullable();
            $table->string('description')->nullable();
            $table->date('estimated_time')->nullable();
            $table->date('definite_time')->nullable();
            $table->dateTime('date_start')->nullable();
            $table->dateTime('date_finish')->nullable();
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
