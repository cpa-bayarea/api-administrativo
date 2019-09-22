<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamada', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('encontro_id');
            $table->unsignedBigInteger('aluno_id');

            $table->date('horario_entrada');
            $table->date('horario_saida');

            $table->foreign('encontro_id')->references('id')->on('encontro');
            $table->foreign('aluno_id')->references('id')->on('aluno');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamada');
    }
}
