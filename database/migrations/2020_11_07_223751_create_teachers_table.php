<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('tcr_id');
            $table->foreignId('tcr_user_id');
            $table->foreign('tcr_user_id')->references('usr_id')->on('users');
            $table->string('tcr_gtk');
            $table->string('tcr_nuptk');
            $table->bigInteger('tcr_created_by')->unsigned()->nullable();
            $table->bigInteger('tcr_updated_by')->unsigned()->nullable();
            $table->bigInteger('tcr_deleted_by')->unsigned()->nullable();
            $table->string('tcr_sys_note')->nullable();
            $table->timestamp('tcr_created_at')->nullable();
            $table->timestamp('tcr_updated_at')->nullable();
            $table->timestamp('tcr_deleted_at')->nullable();
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
