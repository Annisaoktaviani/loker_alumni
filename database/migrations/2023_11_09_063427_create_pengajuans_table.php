<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id('id_pengajuan');
            // $table->integer('id_alumni');
            $table->string('nama_lengkap',50);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('email');
            $table->string('kontak',13);
            $table->text('persyaratan');
            $table->date('tanggal_pengajuan');
            // $table->text('foto_peng');
            // $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
