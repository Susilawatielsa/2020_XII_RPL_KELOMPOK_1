<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('prv_id');
            $table->string('prv_name');
            $table->biginteger('prv_created_by')->unsigned()->nullable();
            $table->biginteger('prv_updated_by')->unsigned()->nullable();
            $table->biginteger('prv_deleted_by')->unsigned()->nullable();
            $table->string('prv_sys_note')->nullable();
            $table->timestamp('prv_created_at')->nullable();
            $table->timestamp('prv_updated_at')->nullable();
            $table->timestamp('prv_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
