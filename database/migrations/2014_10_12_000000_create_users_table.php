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
        Schema::create('users', function (Blueprint $table) { // se crea la tabla Users
            $table->id(); // integer unsigned increment.
            $table->string('name'); //varchar.
            $table->string('email')->unique();//unique para que a nivel de bd sea unico.
            $table->timestamp('email_verified_at')->nullable();//fechas-verificacion de correos electronicos
            $table->string('password');
            $table->rememberToken();//varchar(100).
            $table->timestamps();//created_at y updated_at.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()// se elimina la tabla Users
    {
        Schema::dropIfExists('users');
    }
}
