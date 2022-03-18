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
            $table->string('azienda', 20);
            $table->string('stazione_di_partenza', 10);
            $table->string('stazione_di_arrivo', 10);
            $table->time('orario_di_partenza', 6);
            $table->time('orario_di_arrivo', 6);
            $table->string('codice_treno_numero', 11);
            $table->smallInteger('carrozze');
            $table->boolean('in_orario', true);
            $table->boolean('cancellato', false);
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
