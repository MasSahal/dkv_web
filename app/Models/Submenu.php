<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;
    protected $table = "submenu";
    protected $primaryKey = "id_submenu";
    protected $fillable = [
        'id_menu',
        'icon_submenu',
        'nama_submenu',
        'slug_submenu',
        'urutan_submenu',
    ];
}
