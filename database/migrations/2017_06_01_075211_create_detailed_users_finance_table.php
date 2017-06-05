<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailedUsersFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailed_users_finance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('finance_id');
            $table->integer('users_id');
            $table->unsignedTinyInteger('state')->default(0)->comment('0未结清，1已结清');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailed_users_finance');
    }
}
