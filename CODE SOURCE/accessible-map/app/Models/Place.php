<?php

namespace App\Models;

use App\Models\Type;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $table = 'places';
    
    protected $fillable = [
        'city_id',
        'type_id',
        'name',
        'description',
        'phone',
        'location',
        'image',
        'social',
        'features_accessible',
        'features_and_facilities',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'created_by'
    ];

    public function city()
    {
        return $this->belongsTo(City::class,'city_id','id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class,'type_id','id');
    }
}
