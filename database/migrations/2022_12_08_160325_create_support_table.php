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
        Schema::create('support', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("idTicket");
            $table->string("idTemplate");
            $table->string("NombreSitio");
            $table->string("NombreUser");
            $table->string("email");
            $table->string("motivo");
            $table->string("descripcion");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_support');
    }
};
