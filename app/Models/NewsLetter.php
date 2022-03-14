<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table                   = 'news_letters';
    protected $fillable                = [
        'email','created_at','updated_at','deleted_at'
    ];
    public $timestamps                  = false;
    protected $dates                    = ['deleted_at'];
}
