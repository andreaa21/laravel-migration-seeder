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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            /**
             * Azienda
             * Stazione di partenza
             * Stazione di arrivo
             * Orario di partenza
             * Orario di arrivo
             * Codice Treno
             * Numero Carrozze
             * In orario
             * Cancellato
             */
            $table->string('azienda', 15);
            $table->string('stazione_di_partenza', 30);
            $table->string('stazione_di_arrivo', 30);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno', 4);
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('is_on_time')->unsigned()->default(1);
            $table->boolean('is_canceled')->unsigned()->default(0);


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
};
