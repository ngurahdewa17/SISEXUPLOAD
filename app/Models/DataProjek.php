<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProjek extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_pop_id',
        'projek',
        'mitra_projek',
        'no_kontak',
    ];

    public function datapop()
    {
        return $this->belongsTo(DataPop::class, 'data_pop_id', 'id');
    }

}
