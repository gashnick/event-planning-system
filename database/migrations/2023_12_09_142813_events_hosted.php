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
        Schema::create('events_hosted', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('event_name');
            $table->string('venue');
            $table->date('date');
            $table->integer('no_of_tickets');
            $table->float('price');
            $table->string('description');
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
        //
    }
};
