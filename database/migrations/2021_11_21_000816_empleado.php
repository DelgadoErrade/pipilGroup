<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string("firstName",20);
            $table->string("lastName",20);
            $table->enum("condicion",["activo","inactivo"]);
            $table->string("telefono",20);
            $table->string("email",100);
            $table->string("direccion",100);
            $table->string("piso",6);
            $table->string("apartamento",6);
            $table->string("ciudad",20);
            $table->string("zipCode",5);
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
        Schema::dropIfExists('empleados');
    }
}
