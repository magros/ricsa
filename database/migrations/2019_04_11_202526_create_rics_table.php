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
            $table->String('id');
            $table->String('name');
            $table->String('complexity');
            $table->double('cost');
            $table->date('time');
            $table->String('description');
            $table->date('date_start');
            $table->date('date_finish');
            $table->timestamps();
            $table->softDeletes();
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
