<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;

    protected $primaryKey = 'nama';

    protected $table = 'workspaces';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'nama',
    ];

    
}
