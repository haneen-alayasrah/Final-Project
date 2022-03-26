<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
        'name',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'navbar_status',
        'status'
    ];
}
