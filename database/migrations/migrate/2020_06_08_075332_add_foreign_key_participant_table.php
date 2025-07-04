<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participants', function (Blueprint $table) {
            Schema::table('participants', function (Blueprint $table) {
                $table->unsignedBigInteger('event_id')->change();
                $table->foreign('event_id')->references('id')->on('events');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participants', function (Blueprint $table) {
            //
        });
    }
}
