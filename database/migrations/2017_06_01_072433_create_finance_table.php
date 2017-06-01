<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Finance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('amount');
            $table->string('details');
            $table->unsignedTinyInteger('state');
            $table->text('describe');
            $table->timestamp('end_at')->nullable();
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
        Schema::dropIfExists('Finance');
    }
}
