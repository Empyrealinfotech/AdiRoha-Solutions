<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table                   = 'inquiries';
    protected $fillable                = [
        'company_name','name','email','phone_no','message','created_at','updated_at','deleted_at'
    ];
    public $timestamps                  = false;
    protected $dates                    = ['deleted_at'];
}
