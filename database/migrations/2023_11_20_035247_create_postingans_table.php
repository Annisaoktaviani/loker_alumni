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
        Schema::create('postingans', function (Blueprint $table) {
            $table->id('id_postingan');
            // $table->integer('id_alumni');
            $table->string('nama_perusahaan',50);
            $table->enum('posisi',['Manajer','Administrasi dan  Gudang','Manajer Pemasaran']);
            $table->longtext('deskripsi');
            $table->text('alamat');
            $table->string('email');
            $table->string('kontak',13);
            $table->enum('status', ['Draft', 'Accepted', 'Rejected'])->default('Draft');
            $table->text('foto');
            $table->date('tanggal_post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postingans');
    }
};
