<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('event_outline');
            $table->dateTime('event_date')->default(Carbon::now()->addMonth());
            $table->integer('participant_number')->nullable();
            $table->boolean('is_closed')->default(false);
            $table->string('image')->nullable()->default(0.0);
            $table->float('fee', 8, 2)->nullable()->default(0.0);
            $table->float('early_birds', 8,2)->nullable()->default(0.0);
            $table->float('discount', 8,2)->nullable()->default(0.0);
            $table->float('late_payment', 8,2)->nullable()->default(0.0);
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
        Schema::dropIfExists('events');
    }
}
