<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImunisasiTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imunisasi', function (Blueprint $table) {
            $table->increments('id_imun');
            $table->unsignedInteger('id_anak');
            $table->unsignedInteger('id_j_imun');
            $table->date('tgl_imun');
            $table->string('booster');
            $table->string('ket_imun')->nullable();
            $table->timestamps();
            $table->foreign('id_anak')->references('id_anak')->on('dataanaks');
            $table->foreign('id_j_imun')->references('id_j_imun')->on('jenisimunisasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imunisasi');
    }
}
