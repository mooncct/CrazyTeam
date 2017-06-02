<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Finance', function (Blueprint $table) {

            $table->timestamp('start_at')->nullable()->after('describe')->default('2017-06-02 08:13:42');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Finance', function (Blueprint $table) {

            $table->dropColumn('start_at');
        });
    }
}
