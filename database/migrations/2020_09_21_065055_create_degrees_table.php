<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('user');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('major')->nullable();
            $table->string('inst')->nullable();
            $table->string('course_type')->nullable();
            $table->float('result')->nullable();
            $table->integer('passed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('degrees');
    }
}
