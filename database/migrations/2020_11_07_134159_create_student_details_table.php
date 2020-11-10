<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->bigIncrements('std_id');
            $table->foreignId('std_student_id')->unique();
            $table->foreign('std_student_id')->references('stu_id')->on('students');
            $table->string('std_type');
            $table->string('std_key');
            $table->string('std_value');
            $table->bigInteger('std_created_by')->unsigned()->nullable();
            $table->bigInteger('std_updated_by')->unsigned()->nullable();
            $table->bigInteger('std_deleted_by')->unsigned()->nullable();
            $table->string('std_sys_note')->nullable();
            $table->timestamp('std_created_at')->nullable();
            $table->timestamp('std_updated_at')->nullable();
            $table->timestamp('std_deleted_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_details');
    }
}
