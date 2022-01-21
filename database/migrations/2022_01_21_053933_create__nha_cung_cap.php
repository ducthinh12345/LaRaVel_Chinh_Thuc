<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhaCungCap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_nha_cung_cap', function (Blueprint $table) {
            $table->id();
            $table->string('TenNhaCungCap');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->integer('TrangThai');

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
        Schema::dropIfExists('_nha_cung_cap');
    }
}
