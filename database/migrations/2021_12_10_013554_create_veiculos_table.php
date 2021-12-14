<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proprietario');
            $table->string('modelo');
            $table->string('placa');
            $table->string('marca');
            $table->string('ano');
            $table->string('renavam');
            $table->timestamp('deleted_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('veiculos');
    }
}
