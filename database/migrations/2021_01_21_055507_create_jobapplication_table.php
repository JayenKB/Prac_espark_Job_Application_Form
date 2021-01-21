<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobapplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobapplication', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('gender')->nullable();
            $table->string('zip')->nullable();
            $table->string('relationship_status')->nullable();
            $table->date('dateofbirth')->nullable();
            $table->string('ssc_name_of_bord')->nullable();
            $table->string('ssc_passing_year')->nullable();
            $table->string('ssc_percentage')->nullable();
            $table->string('hsc_name_of_bord')->nullable();
            $table->string('hsc_passing_year')->nullable();
            $table->string('hsc_percentage')->nullable();
            $table->string('bechlor_course_name')->nullable();
            $table->string('bechlor_university')->nullable();
            $table->string('bechlor_passing_year')->nullable();
            $table->string('bechlor_percentage')->nullable();
            $table->string('master_course_name')->nullable();
            $table->string('master_university')->nullable();
            $table->string('master_passing_year')->nullable();
            $table->string('master_percentage')->nullable();
            $table->string('workex_company_name')->nullable();
            $table->string('workex_designation')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->string('language_known')->nullable();
            $table->string('technologies_you_know')->nullable();
            $table->string('mysql_technologies_you_know')->nullable();
            $table->string('laravel_technologies_you_know')->nullable();
            $table->string('oracle_technologies_you_know')->nullable();
            $table->string('referance_contact_name')->nullable();
            $table->string('referance_contact_number')->nullable();
            $table->string('referance_contact_relation')->nullable();
            $table->string('preferances_preferd_location')->nullable();
            $table->string('preferances_notice_period')->nullable();
            $table->string('preferances_expacted_CTC')->nullable();
            $table->string('preferances_current_CTC')->nullable();
            $table->string('preferances_department')->nullable();
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
        Schema::dropIfExists('jobapplication');
    }
}
