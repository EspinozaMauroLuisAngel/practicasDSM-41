<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('adminusers', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('password'); 
            $table->softDeletes(); 

            $table->integer('admin_id')->unsigned();            
            $table->foreign('admin_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminusers');
    }
}
