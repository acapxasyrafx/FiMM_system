<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('companyDetail', function (Blueprint $table) {
            $table->id("company_detail_id");
            $table->string('company_name');
            $table->string('reg_no');
            $table->string('type');
            $table->string('date_incorporated');
            $table->string('reg_location_id');
            $table->string('correspondent_location_id');
            $table->string('ownership_type');
            $table->string('paid_capital');
            $table->string('business_nature');
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
