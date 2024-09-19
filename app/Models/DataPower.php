<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPower extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_pop_id',
        'panel_kwh',
        'id_pelanggan',
    ];

    public function datapop()
    {
        return $this->belongsTo(DataPop::class, 'data_pop_id', 'id');
    }
}
