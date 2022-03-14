<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table                   = 'portfolios';
    protected $fillable                = [
        'category_id','name','short_description','description','color_code','image','status','created_at','updated_at','deleted_at'
    ];
    public $timestamps                  = false;
    protected $dates                    = ['deleted_at'];

    public function category(){
	    return $this->belongsTo(Category::class, 'category_id', 'id');
	}
}
