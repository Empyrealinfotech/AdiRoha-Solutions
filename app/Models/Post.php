<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table                   = 'posts';
    protected $fillable                = [
        'slug','name','author','short_description','description','image','image_alt','meta_title','meta_keywords','meta_description','status','created_at','updated_at','deleted_at','created_by','updated_by','deleted_by'
    ];
    public $timestamps                  = false;
    protected $dates                    = ['deleted_at'];

    public function categories(){
        return $this->belongsToMany(BlogCategory::class, 'post_blog_categories','post_id','blog_category_id')->withPivot('created_at','updated_at');
    }

    public function tags(){
        return $this->belongsToMany(BlogTag::class, 'post_blog_tags','post_id','blog_tag_id')->withPivot('created_at','updated_at');
    }
}
