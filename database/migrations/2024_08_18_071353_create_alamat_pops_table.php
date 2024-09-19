<?php

use App\Models\DataPop;
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
        Schema::create('alamat_pops', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DataPop::class)->constrained()->cascadeOnDelete();
            $table->string('nama_pop');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('titik_koordinat');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_pops');
    }
};
