<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('quantity')->nullable();
            $table->double('price')->nullable();
            $table->double('total')->nullable();
            $table->unsignedInteger('quotation_id')->unsigned();
            $table->unsignedInteger('material_id')->unsigned();
            $table->unsignedInteger('ric_id')->unsigned();
            $table->timestamps();
        });

        // Schema::table('material_quotations', function (Blueprint $table) {
        //     $table->foreign('material_id')->references('id')->on('materials');
        //     $table->foreign('quotation_id')->references('id')->on('quotations');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_quotations');
    }
}
