<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engraving extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'partners_name',
        'message',
        'image_path',
    ];
}
