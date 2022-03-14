<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table                   = 'blog_categories';
    protected $fillable                = [
        'slug','name','short_description','description','image','status','created_at','updated_at','deleted_at','created_by','updated_by','deleted_by'
    ];
    public $timestamps                  = false;
    protected $dates                    = ['deleted_at'];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_blog_categories','blog_category_id','post_id')->withPivot('created_at','updated_at');
    }
}
