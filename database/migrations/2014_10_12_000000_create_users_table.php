<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id')->unique();
            $table->string('name');
            $table->string('gender');
            $table->string('avatar');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('division_id')->unsigned();
            $table->integer('grade_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            /*
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade');

            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            */
            
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
