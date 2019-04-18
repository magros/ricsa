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
            $table->integer('quotation_id')->nullable();
            $table->integer('material_id')->nullable();
            $table->timestamps();
        });
        Schema::table('materials',function(Blueprint $table){
            $table->foreign('material_id')->references('id')->on('material_quotations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materials',function(Blueprint $table){
            $table->dropForeign('materials_material_id_foreign');
        });
        Schema::dropIfExists('material_quotations');
    }
}
