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
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->string('orario_partenza', 10);
            $table->string('orario_arrivo', 10);
            $table->char('codice_treno', 6);
            $table->string( 'carrozze' , 100);
            $table->boolean( 'in_orario');
            $table->boolean( 'cancellato');
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
