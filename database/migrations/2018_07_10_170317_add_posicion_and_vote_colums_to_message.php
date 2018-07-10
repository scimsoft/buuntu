<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPosicionAndVoteColumsToMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('messages', function($table) {
            $table->decimal('long', 10, 7)->nullable();;
            $table->decimal('lat', 10, 7)->nullable();;
            $table->bigInteger('votes')->nullable();;
            $table->boolean('pinned')->nullable();;
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
        Schema::table('messages', function($table) {
        $table->dropColumn(['long', 'lat', 'votes','pinned']);
        });
    }
}
