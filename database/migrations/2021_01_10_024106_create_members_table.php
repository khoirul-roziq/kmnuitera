<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('role_user', 50);
            $table->char('nia', 9)->unique();
            $table->char('nim', 9)->unique();
            $table->string('nama', 100);
            $table->string('prodi', 50);
            $table->char('angkatan', 4);
            $table->string('predikat', 50);
            $table->string('tempat_lahir', 50);
            $table->string('tanggal_lahir');
            $table->string('alamat_asal');
            $table->string('alamat_sekarang');
            $table->string('email');
            $table->string('nomor_seluler');
            $table->string('wa');
            $table->string('id_line');
            $table->string('ig');
            $table->string('fb');
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
        Schema::dropIfExists('members');
    }
}
