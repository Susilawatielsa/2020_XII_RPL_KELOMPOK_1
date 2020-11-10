<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('stf_id');
            $table->foreignId('stf_user_id');
            $table->foreign('stf_user_id')->references('usr_id')->on('users');
            $table->string('stf_gtk');
            $table->string('stf_nuptk');
            $table->bigInteger('stf_created_by')->unsigned()->nullable();
            $table->bigInteger('stf_updated_by')->unsigned()->nullable();
            $table->bigInteger('stf_deleted_by')->unsigned()->nullable();
            $table->string('stf_sys_note')->nullable();
            $table->timestamp('stf_created_at')->nullable();
            $table->timestamp('stf_updated_at')->nullable();
            $table->timestamp('stf_deleted_at')->nullable();
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
