<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_obat', function (Blueprint $table) {
            $table->bigInteger('obat_id')->unsigned()->index();
            $table->bigInteger('kategori_id')->unsigned()->index();

            $table->foreign('kategori_id')-> references('id')->on('kategoris');
            $table->foreign('obat_id')-> references('id')->on('obats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_obat');
    }
};
