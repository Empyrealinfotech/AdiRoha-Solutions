<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table                   = 'contact_us';
    protected $fillable                = [
        'name','first_name','last_name','email','phone_no','message','created_at','updated_at','deleted_at'
    ];
    public $timestamps                  = false;
    protected $dates                    = ['deleted_at'];

}
