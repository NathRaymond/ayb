<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boot_camps', function (Blueprint $table) {
            Schema::create('boot_camps', function (Blueprint $table) {
                $table->id();
                $table->string('firstname');
                $table->string('lastname');
                $table->string('email', 100); // Reduced length to 100
                $table->string('phone');
                $table->string('country');
                $table->string('jobtitle');
                $table->enum('joinas', ['Student', 'Trainer', 'Admin']);
                $table->string('eventtype', 50); // Reduced length to 50
                $table->timestamps();
                $table->unique(['email', 'eventtype']);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boot_camps');
    }
};
