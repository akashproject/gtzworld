<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $table = 'leads';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','lead_name','lead_email','lead_phone','country','comment','utm_source','utm_campaign','utm_term','utm_device','utm_adgroup','utm_content','created_at'
    ];
}