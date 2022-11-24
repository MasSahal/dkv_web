<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    use HasFactory;

    protected $table = 'Web';
    protected $fillable = [
        'title_web',
        'sambutan',
        'email',
        'telepon',
        'fax',
        'lokasi',
        'gmap',
    ];
}
