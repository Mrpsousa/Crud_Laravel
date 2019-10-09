<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pecld extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PECLD', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dedutibilidade');
            $table->string('creditoGarantia');
            $table->string('cobrancaAdm');
            $table->string('processoJudicial');
            $table->string('hipotese');
            $table->double('valorConta');
            $table->dateTime('vencimento');
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
        Schema::dropIfExists('PECLD');
    }
}
