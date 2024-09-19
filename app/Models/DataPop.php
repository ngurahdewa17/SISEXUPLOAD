<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPop extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pop',
        'nama_pop',
        'status',
        'kategori',
        'type',
    ];

    public function alamatpop()
    {
        return $this->hasOne(AlamatPop::class, 'data_pop_id', 'id');
    }

    public function dataprojek()
    {
        return $this->hasOne(DataProjek::class, 'data_pop_id', 'id');
    }

    public function datapower()
    {
        return $this->hasOne(DataPower::class, 'data_pop_id', 'id');
    }

     public function datarouter()
    {
        return $this->hasMany(DataRouter::class, 'data_pop_id', 'id');
    }
}
