<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('aluno_id')->nullable();
            $table->string('nome', 150);
            $table->boolean('is_admin');
            $table->string('email', 60)->unique()->notNullable();
            $table->string('matricula', 12)->unique()->notNullable();
            $table->string('password');

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
        Schema::dropIfExists('users');
    }
}
