<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim', 10)->unique();
            $table->string('nama_mhs', 30);
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('prodi', 30);
            $table->string('jurusan', 30);
            $table->string('kelas', 10);
            $table->string('angkatan', 3);
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
        Schema::dropIfExists('mahasiswa');
    }
}
