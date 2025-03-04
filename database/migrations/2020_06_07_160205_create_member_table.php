<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('telephone');
            $table->string('email');
            $table->string('address');
            $table->enum('gender', ['female', 'male']);
            $table->string('state');
            $table->string('country');
            $table->string('employment_status');
            $table->string('organisation');
            $table->string('role_id');
            $table->boolean('volunteer');
            $table->string('eavesdrop');
            $table->string('status')->default('active')->nullable();
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
        Schema::dropIfExists('members');
    }
}
