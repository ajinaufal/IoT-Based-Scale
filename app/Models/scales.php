<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scales extends Model
{
    use HasFactory;
    protected $table = 'scales';
    protected $fillable = [
        'id_user',
        'code_tools',
        'weight',
        'height',
        'status',
        'created_at',
    ];
}
