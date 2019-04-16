<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialEngineeringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_engineering', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->double('quantity');
            $table->double('price');
            $table->double('total');
            $table->double('missing');
            $table->integer('material_id');
            $table->integer('engineering_id');
            $table->integer('inventory_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_engineering');
    }
}
