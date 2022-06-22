<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('bidang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bidang');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nip');

            $table->foreignId('bidang_id')->nullable();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('bidang_id')->references('id')->on('bidang')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        // Schema::dropIfExists('users');
    }
}
