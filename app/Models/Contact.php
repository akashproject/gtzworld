<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','email','phone','country','company','category','comment','utm_source','utm_campaign','utm_term','utm_device','utm_adgroup','utm_content','created_at'
    ];
}