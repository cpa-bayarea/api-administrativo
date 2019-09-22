<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoProjetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_projeto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('projeto_id');

            $table->date('data_entrada');
            $table->date('data_saida');

            $table->foreign('aluno_id')->references('id')->on('aluno');
            $table->foreign('projeto_id')->references('id')->on('projeto');

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
        Schema::dropIfExists('aluno_projeto');
    }
}
