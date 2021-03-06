s<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialEngineeringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_engineerings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->double('quantity')->nullable();
            $table->double('price')->nullable();
            $table->double('total')->nullable();
            $table->double('missing')->nullable();
            $table->integer('material_id')->nullable();
            $table->integer('engineering_id')->nullable();
            $table->integer('inventory_id')->nullable();
            $table->integer('ric_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_engineerings');
    }
}
