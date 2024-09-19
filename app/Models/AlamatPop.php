<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatPop extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'data_pop_id',
        'nama_pop',
        'provinsi',
        'kabupaten',
        'alamat',
        'titik_koordinat',
        'latitude',
        'longitude',
        
    ];

    public function datapop()
    {
        return $this->belongsTo(DataPop::class, 'data_pop_id', 'id');
    }
}
