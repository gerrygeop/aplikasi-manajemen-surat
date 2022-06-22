<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSifatSuratTable extends Migration
{
    
    public function up()
    {
        Schema::create('sifat_surat', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('sifat_surat');
    }
}
