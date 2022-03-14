<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table                   = 'categories';
    protected $fillable                = [
        'name','status','created_at','updated_at','deleted_at'
    ];
    public $timestamps                  = false;
    protected $dates                    = ['deleted_at'];

    public function lazy(){
        return $this->hasMany(Portfolio::class, 'category_id', 'id')->where('status',1)->whereNotNull('image')->orderByRaw('-display_no DESC')->orderBy('id', 'DESC');
    }
}
