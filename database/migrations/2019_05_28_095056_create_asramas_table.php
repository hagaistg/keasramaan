<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asramas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nama_asrama');
            $table->String('pembina_asrama');
            $table->String('jumlah_kamar');
            $table->String('lokasi');
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
        Schema::dropIfExists('asramas');
    }
}
