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
        Schema::create('pengeluaran_kas', function (Blueprint $table) {
            $table->string('kode_pengeluaran', 10); 
            $table->primary('kode_pengeluaran');
            $table->string('email_user',50)
            ->nullable(false);
            $table->enum('jenis_pengeluaran', ['Amal Harian', 'Sumbangan', 'Infaq']);
            $table->dateTime('tanggal_pengeluaran')
            ->default('2023-01-01')->nullable(false);
            $table->string('jumlah_pengeluaran')->nullable(false);
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
        Schema::dropIfExists('pengeluaran_kas');
    }
};
