<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConsultanDocDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('consultantDocDetail', function (Blueprint $table) {
            $table->id("consultant_doc_id");
            $table->string('title');
            $table->string('description');
            $table->string('directory_url');
            $table->string('consultant_reg_id');
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
