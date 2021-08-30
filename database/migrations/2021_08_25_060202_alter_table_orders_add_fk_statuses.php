<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableOrdersAddFkStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** Drop Column status(string) */
        Schema::table('orders', function(Blueprint $table){
            $table->dropColumn('status');
        });

        /** add status(bigint) */
        Schema::table('orders', function(Blueprint $table){
            $table->unsignedBigInteger('status')->after('amount');
            $table->foreign('status')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /** Delete status (BigInt) */
        Schema::table('orders', function(Blueprint $table){
            
            $table->dropForeign('orders_status_foreign');
            $table->dropColumn('status');
        });

        /** Create Column status (String) */
        Schema::table('orders', function(Blueprint $table){
            $table->string('status')->after('amount');
        });

    }
}
