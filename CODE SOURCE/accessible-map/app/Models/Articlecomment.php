<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articlecomment extends Model
{
    use HasFactory;
    protected $table = 'articlecomments';
    
    protected $fillable = [
        'user_id',
        'article_id',
        'comment',
    ];
    public function article()
    {
        return $this->belongsTo(Article::class,'article_id','id');
    }
}
