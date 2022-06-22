<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiTable extends Migration
{
    
    public function up()
    {
        Schema::create('disposisi', function (Blueprint $table) {
            $table->id();
            $table->boolean('verifikasi')->default(false);
            $table->text('catatan_disposisi');

            $table->foreignId('user_id');
            $table->foreignId('surat_id');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('surat_id')->references('id')->on('surat_masuk')->onDelete('cascade');
        });

        Schema::create('user_disposisi', function (Blueprint $table) {
            $table->primary(['user_id', 'disposisi_id']);
            $table->foreignId('user_id');
            $table->foreignId('disposisi_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('disposisi_id')->references('id')->on('disposisi')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('disposisi');
    }
}
