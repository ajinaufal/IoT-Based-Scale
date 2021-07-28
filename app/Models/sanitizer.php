<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanitizer extends Model
{
    use HasFactory;
    protected $table = 'sanitizer';
    protected $fillable = [
        'volume',
        'created_at',
    ];
}
