<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 150);
            $table->date('data_inicio')->nullable();
            $table->date('data_entrega')->nullable();
            $table->date('data_previsao_entrega');
            $table->string('product_owner', 80);

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
        Schema::dropIfExists('projeto');
    }
}
