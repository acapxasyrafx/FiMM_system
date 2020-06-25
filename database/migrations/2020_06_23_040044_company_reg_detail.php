<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyRegDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('companyRegDetail', function (Blueprint $table) {
            $table->id("company_reg_id");
            $table->string('company_detail_id');
            $table->string('auth_person_detail_id');
            $table->string('alternate_auth_person_id');
            $table->string('bankcruptcy_status');
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
