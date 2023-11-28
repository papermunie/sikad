<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemasukan_kas', function (Blueprint $table) {
            $table->string('kode_pemasukan', 10)->primary();
            $table->string('email_user',50)
            ->nullable(false);
            $table->enum('jenis_pemasukan', ['Amal Harian', 'Sumbangan', 'Infaq']);
            $table->dateTime('tanggal_pemasukan')
            ->default('2023-01-01')->nullable(false);
            $table->string('jumlah_pemasukan')->nullable(false);
            $table->text('dokumentasi')->nullable(true);
            //foreign key
            $table->foreign('email_user')->references('email_user')
            ->on('tbl_user')->onDelete('cascade')
            ->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukan_kas');
    }
};
