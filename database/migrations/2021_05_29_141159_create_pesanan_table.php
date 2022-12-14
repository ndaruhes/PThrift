<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_barang');
            $table->integer('id_owner');
            $table->integer('id_pemesan');
            $table->integer('jumlah_pesanan');
            $table->string('alamat');
            $table->integer('kode_pos');
            $table->float('total_harga');
            $table->integer('nomor_invoice');
            $table->enum('status', ['Accepted', 'Pending'])->default('Pending');
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
        Schema::dropIfExists('pesanan');
    }
}
