<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostBlogCategory extends Model
{
    use HasFactory;
    protected $table                   = 'post_blog_categories';
    protected $fillable                = [
        'post_id','blog_category_id','created_at','updated_at'
    ];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_blog_categories','blog_category_id','post_id');
    }

}
