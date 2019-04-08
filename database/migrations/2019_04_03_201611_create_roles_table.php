<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('role_has_permission', function (Blueprint $table){
            $table->integer('role_id');
            $table->integer('permission_id');
        });
        Schema::table('users',function(Blueprint $table){
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){
            $table->dropForeign('users_role_id_foreign');
        });
        Schema::dropIfExists('roles');
        Schema::dropIfExists('role_has_permission');
    }
}
