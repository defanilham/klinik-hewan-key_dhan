<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('pasien', function (Blueprint $table) {
        $table->dropColumn('no_bpjs'); // Hapus kolom 'no_bpjs'
        $table->string('nama_hewan')->nullable();
        $table->string('ras')->nullable();
        $table->string('warna_bulu')->nullable();
        $table->string('jenis_hewan')->nullable();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasien', function (Blueprint $table) {
            //
        });
    }
}
