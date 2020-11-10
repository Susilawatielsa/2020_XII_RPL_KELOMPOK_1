<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_types', function (Blueprint $table) {
            $table->bigIncrements('pst_id');
            $table->string('pst_name');
            $table->string('pst_honorarium');
            $table->bigInteger('pst_created_by')->unsigned()->nullable();
            $table->bigInteger('pst_updated_by')->unsigned()->nullable();
            $table->bigInteger('pst_deleted_by')->unsigned()->nullable();
            $table->string('pst_sys_note')->nullable();
            $table->timestamp('pst_created_at')->nullable();
            $table->timestamp('pst_updated_at')->nullable();
            $table->timestamp('pst_deleted_at')->nullable();

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
