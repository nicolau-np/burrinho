<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagems', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('send_id')->unsigned()->index();
            $table->bigInteger('receive_id')->unsigned()->index();
            $table->text('message');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('mensagems', function (Blueprint $table) {
            $table->foreign('send_id')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->foreign('receive_id')->references('id')->on('usuarios')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensagems');
    }
}