<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            // invisible
            $table->integer('category_id');
            $table->integer('user_id');
            $table->integer('status')->default(1);
            
            // visible
            $table->string('title');
            $table->string('location')->nullable();
            $table->string('tags')->nullable();
            $table->text('description')->nullable();
            $table->date('deadline')->nullable();
            $table->string('company')->nullable();
            $table->string('website')->nullable();
            $table->integer('salary')->nullable();
            $table->string('logo')->nullable();    
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
        Schema::dropIfExists('jobs');
    }
}
