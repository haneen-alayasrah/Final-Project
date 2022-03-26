<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articlecomment;
class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    
    protected $fillable = [
        'title',
        'article',
        'image',
        'type',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'created_by'
    ];

    public function articlecomments()
    {
        return $this->hasMany(Articlecomment::class,'article_id','id');
    }
}
