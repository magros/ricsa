<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('specification');
            $table->string('thickness');
            $table->string('dimension');
            $table->string('length');
            $table->string('net_weight');
            $table->string('gross_weight');
            $table->string('trademark');
            $table->double('price');
            $table->string('r_rc')->nullable();
            $table->integer('provider_id')->nullable();
            $table->integer('material_type_id');
            $table->integer('family_id')->nullable();
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
        Schema::dropIfExists('materials');
    }
}
