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

            // Extra for internal usess
            $table->string('status')->default(1);
            $table->string('role')->default('seeker');

            // Personal Information
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('mobile')->nullable();
            $table->string('district')->nullable();
            $table->string('address')->nullable();

            // Educational Background
            $table->string('degree_name')->nullable();
            $table->string('degree_title')->nullable();
            $table->string('degree_major')->nullable();
            $table->string('degree_institute')->nullable();
            $table->string('degree_course_type')->nullable();
            $table->string('degree_result')->nullable();
            $table->string('degree_passed_year')->nullable();

            // Professional Information
            $table->string('prof_designation')->nullable();
            $table->string('prof_company')->nullable();
            $table->string('prof_start')->nullable();
            $table->string('prof_status')->nullable();
            $table->string('prof_end')->nullable();
            
            // for employer - company details
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_mobile')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_twitter')->nullable();
            $table->string('company_facebook')->nullable();
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
