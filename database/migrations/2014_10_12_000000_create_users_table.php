<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();//integer, unsigned, increment
            $table->string('name');//varchar, 255 carateres, text para mas caracteres $table->text()
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//timestamp:para guardar fechas, nullable: porq puede quedar vacio
            $table->string('password');
            $table->string('avatar');
            $table->rememberToken();//este metodo crea un varchar para alamcenar un token cuando el usuario marca "mantener la sesion iniciada"
            $table->timestamps();//crea 2 columnas, created_at, update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');// llama a la clase schema y ejecuta el metodo dropIfExists(), elimina la tabla users
    }
}
