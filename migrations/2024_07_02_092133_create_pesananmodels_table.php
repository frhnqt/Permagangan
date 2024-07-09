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
        Schema::create('tbl_pesanan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pesanan');
            $table->string('kodepesanan')->unique();
            $table->string('invoice')->nullable();
            $table->string('metodepembayaranid');
            $table->decimal('totalbelanja', 12, 2);
            $table->enum('status', ['pending', 'confirmed', 'packed', 'sent', 'delivered', 'cancelled'])->default('pending');
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
        Schema::dropIfExists('tbl_pesanan');
    }
};