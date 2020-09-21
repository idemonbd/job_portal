<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Personal Information
            $table->string('father');
            $table->string('mother');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('mobile');
            $table->string('district');
            $table->string('address');

            // Educational Background
            $table->string('degree_name');
            $table->string('degree_title');
            $table->string('degree_major');
            $table->string('degree_institute');
            $table->string('degree_course_type');
            $table->string('degree_result');
            $table->string('degree_passed_year');

            // Professional Information
            $table->string('prof_designation');
            $table->string('prof_company');
            $table->string('prof_start');
            $table->string('prof_status');
            $table->string('prof_end');
            
            // for employer - company details
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_mobile');
            $table->string('company_address');
            $table->string('company_twitter');
            $table->string('company_facebook');
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
