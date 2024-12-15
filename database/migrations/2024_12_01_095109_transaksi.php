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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voucher_id')->constrained('voucher')->onDelete('cascade');
            $table->decimal('jumlah_pengurangan', 10, 2);
            $table->decimal('sisa_saldo', 10, 2);
            $table->dateTime('tanggal_transaksi')->default(now()->timezone('Asia/Jakarta'));
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
