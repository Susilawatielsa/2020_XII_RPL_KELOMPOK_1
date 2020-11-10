<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->bigIncrements('tcd_id');
            $table->foreignId('tcd_teacher_id')->unique();
            $table->foreign('tcd_teacher_id')->references('tcr_id')->on('teachers');
            $table->string('tcd_type');
            $table->string('tcd_key');
            $table->string('tcd_value');
            $table->bigInteger('tcd_created_by')->unsigned()->nullable();
            $table->bigInteger('tcd_updated_by')->unsigned()->nullable();
            $table->bigInteger('tcd_deleted_by')->unsigned()->nullable();
            $table->string('tcd_sys_note')->nullable();
            $table->timestamp('tcd_created_at')->nullable();
            $table->timestamp('tcd_updated_at')->nullable();
            $table->timestamp('tcd_deleted_at')->nullable();

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
