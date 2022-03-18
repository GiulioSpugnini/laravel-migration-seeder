<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 20);
            $table->string('Stazione di partenza', 10);
            $table->string('Stazione di arrivo', 10);
            $table->time('Orario di partenza', 6);
            $table->time('Orario di arrivo', 6);
            $table->string('Codice Treno Numero', 11);
            $table->smallInteger('Carrozze');
            $table->boolean('In orario', true);
            $table->boolean('Cancellato', false);
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
        Schema::dropIfExists('trains');
    }
}
