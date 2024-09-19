<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRouter extends Model
{
    use HasFactory;

    protected $fillable =[
        'data_pop_id',
        'tipe_router',
        'kls_router',
        'nama_router',
        'jml_portoneg',
        'jml_portteng',
        'jml_portseratusg',
    ];

    public function datapop()
    {
        return $this->belongsTo(DataPop::class, 'data_pop_id','id');
    }
}
