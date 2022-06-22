<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('asal_surat');
            $table->string('no_surat');
            $table->string('indeks');
            $table->date('tanggal_surat');
            $table->date('tanggal_masuk');
            $table->text('perihal');
            $table->string('file')->nullable();

            $table->foreignId('user_id');
            $table->foreignId('sifat_surat_id');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('sifat_surat_id')->references('id')->on('sifat_surat')->onDelete('cascade');
            
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('surat_masuk');
    }
}
