<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExamDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('examDetail', function (Blueprint $table) {
            $table->id("exam_detail_id");
            $table->string('language');
            $table->string('location');
            $table->string('center_code');
            $table->string('email')->unique();
            $table->string('session');
            $table->string('consultant_reg_id');
            $table->string('status');
            $table->string('result');
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
        Schema::dropIfExists('examDetail');
    }
}
