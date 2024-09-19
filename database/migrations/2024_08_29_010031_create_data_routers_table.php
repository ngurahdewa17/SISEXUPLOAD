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
        Schema::create('data_routers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DataPop::class)->constrained()->cascadeOnDelete();
            $table->string('tipe_router');
            $table->string('kls_router');
            $table->string('nama_router');
            $table->string('jml_portoneg');
            $table->string('jml_portteng');
            $table->string('jml_portseratusg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_routers');
    }
};
