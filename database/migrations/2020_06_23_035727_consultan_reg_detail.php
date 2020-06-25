<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConsultanRegDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('consultantRegDetail', function (Blueprint $table) {
            $table->id("consultant_reg_id");
            $table->string('type');
            $table->string('person_detail_id');
            $table->string('mailing_location_id');
            $table->string('consultant_category');
            $table->string('apprentice_programe');
            $table->string('member_code');
            $table->string('company_detail_id');
            $table->string('distribution_point_code');
            $table->string('distribution_point_name');
            $table->string('distribution_point_location_id');
            $table->string('reg_status');
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
        //
    }
}
