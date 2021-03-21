<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortoFoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porto_folios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_portofolio')->nullable();
            $table->bigInteger('user_id');
            $table->string('photo_karya');
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
        Schema::dropIfExists('porto_folios');
    }
}
