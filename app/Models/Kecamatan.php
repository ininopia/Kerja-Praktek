<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';

    protected $fillable = [
        'name',
        'href',
        'geojson_href',
        'geojson_text',
        'versi',
        'type',
        'tipe_lokasi',
        'nama_objek',
        'kabupaten',
        'kecamatan',
        'properties',
        'workspace',
        'subworkspace',
        'tanggal_data',
    ];

    // protected $casts = [
    //     'geojson_text' => 'json',
    //     'properties' => 'json',
    // ];
    public function workspace()
    {
        return $this->belongsTo(Workspace::class, 'workspace', 'nama');
    }
}
