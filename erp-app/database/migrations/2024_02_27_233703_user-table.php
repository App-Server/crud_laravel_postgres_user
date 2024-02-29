<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user-table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomecompleto');
            $table->string('email');
            $table->string('senha')->nullable();
            $table->string('setor');
            $table->string('funcao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
