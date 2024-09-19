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
        Schema::create('data_powers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DataPop::class)->constrained()->cascadeOnDelete();
            $table->string('panel_kwh');
            $table->string('id_pelanggan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_powers');
    }
};
