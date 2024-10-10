<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_user');
            $table->integer('jumlah_barang');
            $table->decimal('total_harga', 15, 2);
            $table->date('tanggal_transaksi');
            $table->string('tipe_transaksi');
            $table->timestamps();

            // Foreign key relations
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
