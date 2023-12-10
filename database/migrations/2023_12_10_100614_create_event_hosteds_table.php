<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_hosteds', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('venue');
            $table->date('date');
            $table->integer('no_of_tickets');
            $table->decimal('price', 10, 2)->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('event_hosteds');
    }
};
