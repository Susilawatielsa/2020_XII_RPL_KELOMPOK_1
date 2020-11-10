<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('years', function (Blueprint $table) {
            $table->bigIncrements('yrs_id');
            $table->string('yrs_name');
            $table->bigInteger('yrs_created_by')->unsigned()->nullable();
            $table->bigInteger('yrs_updated_by')->unsigned()->nullable();
            $table->bigInteger('yrs_deleted_by')->unsigned()->nullable();
            $table->string('yrs_sys_note')->nullable();
            $table->timestamp('yrs_created_at')->nullable();
            $table->timestamp('yrs_updated_at')->nullable();
            $table->timestamp('yrs_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('years');
    }
}
