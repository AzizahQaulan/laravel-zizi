<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portofolios_1032';

    protected $fillable = [
        'judul',
        'deskripsi',
        'teknologi',
        'link'
    ];
}
