<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('role_user', 50);
            $table->string('predikat', 50);
            $table->string('nama', 100);
            $table->char('nim', 9)->unique();
            $table->string('prodi', 50);
            $table->char('angkatan', 4);
            $table->string('email', 50);
            $table->string('wa', 20);
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
        Schema::dropIfExists('guests');
    }
}
