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
            $table->char('dedutibilidade', 100);
            $table->char('cobrancaAdm', 2);
            $table->char('processoJudicial', 2);
            $table->char('creditoGarantia', 2);
            $table->char('hipotese', 100);
            $table->double('valorConta');
            $table->dateTime('vencimento');
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
